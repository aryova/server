<?php

namespace ShopifyExport\Queries;

use Address;
use CartRule;
use Currency;
use Customer;
use DateTime;
use Db;
use Order;
use OrderPayment;
use OrderState;
use PrestaShopCollection;
use Product;
use Shop;
use ShopifyExport\DefaultOrderStates;
use State;
use Tax;

require_once(__DIR__ . '/../DefaultOrderStates.php');

/**
 * Export customers in the default Shopify CSV format
 * @see https://help.shopify.com/en/manual/orders/export-orders#order-export-csv-structure
 *
 * Here are the only differences:
 * * New field for each Line item: "Lineitem Barcode" which contains the isbn, ean, or upc
 * * Financial status might contain a custom status
 * * Addresses include the extra X First Name and X Last Name columns
 * * An extra column Customer ID
 * * An extra column Lineitem Product Id that contains the product ID (as opposed to the Id columns which contains the variant ID)
 */
class OrderQuery implements ExportQuery
{
    const DATETIME_FORMAT = 'Y-m-d H:i:s O';

    public function execute($shopId, $languageId)
    {
        $orderCollection = new PrestaShopCollection('Order', $languageId);
        $orderCollection->where('id_shop', 'IN', Shop::getContextListShopID());
        /** @var Order[] $orders */
        $orders = $orderCollection->getAll();

        if ($orders === false) {
            return;
        }

        foreach ($orders as $order) {
            $addressDelivery = new Address($order->id_address_delivery, $languageId);
            $addressInvoice = new Address($order->id_address_invoice, $languageId);
            $orderTaxDetails = $order->getProductTaxesDetails();

            $line = $this->makeEmptyLine($order);

            // Add the order itself
            $line = array_merge($line, $this->makeOrderArray($order, $addressDelivery->phone));
            // With addresses
            $line = array_merge($line, $this->makeAddressArray('Billing', $addressInvoice, $languageId));
            $line = array_merge($line, $this->makeAddressArray('Shipping', $addressDelivery, $languageId));

            // Now add the line items
            foreach ($order->getProductsDetail() as $product) {
                $line = array_merge($line, $this->makeProductArray($order, $product, $languageId));
                $line = array_merge($line, $this->makeProductTaxesArray($product, $orderTaxDetails, $languageId));

                yield $line;
                $line = $this->makeEmptyLine($order);
            }
        }
    }

    private function getOrderFinancialStatus(Order $order)
    {
        $stateId = $order->getCurrentState();
        // Switch on known states
        switch ($stateId) {
            case DefaultOrderStates::AWAITING_CHECK_PAYMENT:
            case DefaultOrderStates::AWAITING_BANK_WIRE_PAYMENT:
            case DefaultOrderStates::ON_BACKORDER_NOT_PAID:
            case DefaultOrderStates::AWAITING_CASH_ON_DELIVERY:
            case DefaultOrderStates::PAYMENT_ERROR:
                return 'pending';
            case DefaultOrderStates::PAYMENT_ACCEPTED:
            case DefaultOrderStates::PROCESSING_IN_PROGRESS:
            case DefaultOrderStates::SHIPPED:
            case DefaultOrderStates::DELIVERED:
            case DefaultOrderStates::ON_BACKORDER_PAID:
            case DefaultOrderStates::REMOTE_PAYMENT_ACCEPTED:
                return 'paid';
            case DefaultOrderStates::CANCELED:
                return 'voided';
            case DefaultOrderStates::REFUNDED:
                return 'refunded';
        }
        $state = new OrderState($stateId, $order->id_lang);
        if ($state->paid) {
            return 'paid';
        }
        return $state->name;
    }

    private function makeEmptyLine($order)
    {
        return array(
            'Name' => $order->id, // It looks like $order->reference is not unique in practice
            'Phone' => '',
            'Email' => '',
            'Customer Id' => '', // Extra line not part of the standard format
            'Financial Status' => '',
            'Paid at' => '',
            'Fulfillment Status' => '',
            'Fulfilled at' => '',
            'Accepts Marketing' => '',
            'Currency' => '',
            'Subtotal' => '',
            'Shipping' => '',
            'Taxes' => '',
            'Total' => '',
            'Discount Code' => '',
            'Discount Amount' => '',
            'Shipping Method' => '',
            'Created at' => '',
            'Lineitem Product Id' => '',
            'Lineitem quantity' => '',
            'Lineitem name' => '',
            'Lineitem price' => '',
            'Lineitem compare at price' => '',
            'Lineitem SKU' => '',
            'Lineitem Barcode' => '', // Extra line not part of the standard format
            'Lineitem requires shipping' => '',
            'Lineitem taxable' => '',
            'Lineitem fulfillment status' => '',
            'Billing Name' => '',
            'Billing First Name' => '', // Extra line not part of the standard format
            'Billing Last Name' => '', // Extra line not part of the standard format
            'Billing Street' => '',
            'Billing Address1' => '',
            'Billing Address2' => '',
            'Billing Company' => '',
            'Billing City' => '',
            'Billing Zip' => '',
            'Billing Province' => '',
            'Billing Country' => '',
            'Billing Phone' => '',
            'Shipping Name' => '',
            'Shipping First Name' => '', // Extra line not part of the standard format
            'Shipping Last Name' => '', // Extra line not part of the standard format
            'Shipping Street' => '',
            'Shipping Address1' => '',
            'Shipping Address2' => '',
            'Shipping Company' => '',
            'Shipping City' => '',
            'Shipping Zip' => '',
            'Shipping Province' => '',
            'Shipping Country' => '',
            'Shipping Phone' => '',
            'Notes' => '',
            'Note Attributes' => '',
            'Cancelled at' => '',
            'Payment Method' => '',
            'Payment Reference' => '',
            'Refunded Amount' => '',
            'Vendor' => '',
            'Outstanding Balance' => '',
            'Employee' => '',
            'Location' => '',
            'Device ID' => '',
            'Id' => '',
            'Tags' => '',
            'Risk Level' => '',
            'Source' => 'web',
            'Lineitem discount' => '',
            'Tax 1 Name' => '',
            'Tax 1 Value' => '',
            'Tax 2 Name' => '',
            'Tax 2 Value' => '',
            'Tax 3 Name' => '',
            'Tax 3 Value' => '',
            'Tax 4 Name' => '',
            'Tax 4 Value' => '',
            'Tax 5 Name' => '',
            'Tax 5 Value' => '',
        );
    }

    /**
     * @param Order $order
     * @param $phoneNumber
     * @return array
     */
    private function makeOrderArray(Order $order, $phoneNumber)
    {
        $customer = new Customer((int)$order->id_customer);
        $currency = new Currency((int)$order->id_currency);
        $outstandingBalance = $order->total_paid - $order->getTotalPaid();

        return array(
            'Phone' => $phoneNumber,
            'Email' => $customer->email,
            'Customer Id' => $customer->id,
            'Financial Status' => $this->getOrderFinancialStatus($order),
            'Paid at' => $this->getPaidAtDate($order, $outstandingBalance),
            'Fulfillment Status' => $this->getOrderFulfillmentStatus($order),
            'Fulfilled at' => $this->formatDate($order->delivery_date),
            'Accepts Marketing' => $customer->newsletter ? 'true' : 'false',
            'Currency' => $currency->iso_code,
            'Subtotal' => $order->total_products,
            'Shipping' => $order->total_shipping_tax_excl,
            'Taxes' => $order->total_paid_tax_incl - $order->total_paid_tax_excl,
            'Total' => $order->total_paid_tax_incl,
            'Discount Code' => $this->getDiscountCode($order),
            'Discount Amount' => $order->total_discounts,
            'Shipping Method' => $this->getShippingMethodName($order),
            'Created at' => $this->formatDate($order->date_add),
            'Notes' => '',
            'Note Attributes' => '',
            'Cancelled at' => $this->getStateDate($order,
                array(DefaultOrderStates::CANCELED, DefaultOrderStates::REFUNDED)),
            'Payment Method' => $this->getPaymentMethod($order),
            'Payment Reference' => $this->getPaymentReference($order),
            'Refunded Amount' => $this->getRefundedAmount($order),
            'Outstanding Balance' => $outstandingBalance,
            'Tags' => '',
            'Risk Level' => '',
        );
    }

    /**
     * @param Order $order
     * @param array $product
     * @param int $languageId
     * @return array
     */
    private function makeProductArray(Order $order, array $product, $languageId)
    {
        return array(
            'Id' => $product['product_attribute_id'],
            'Lineitem Product Id' => $product['product_id'],
            'Lineitem quantity' => $product['product_quantity'],
            'Lineitem name' => $product['product_name'],
            'Lineitem price' => $product['original_product_price'],
            'Lineitem compare at price' => '',
            'Lineitem SKU' => $this->getProductReference($product, $languageId),
            'Lineitem Barcode' => $this->getProductBarcode($product, $languageId),
            'Lineitem requires shipping' => !$product['is_virtual'],
            'Lineitem taxable' => $product['tax_rate'] === 0 ? 'false' : 'true',
            'Lineitem fulfillment status' => $this->getItemFulfillmentStatus($order, $product),
            'Lineitem discount' => $product['original_product_price'] - $product['product_price'],
            'Vendor' => '',
        );
    }

    /**
     * @param string $name
     * @param Address $address
     * @param int $languageId
     * @return array
     */
    private function makeAddressArray($name, Address $address, $languageId)
    {
        $state = new State($address->id_state, $languageId);
        return array(
            $name . ' Name' => $address->firstname . ' ' . $address->lastname,
            $name . ' First Name' => $address->firstname,
            $name . ' Last Name' => $address->lastname,
            $name . ' Street' => '',
            $name . ' Address1' => $address->address1,
            $name . ' Address2' => $address->address2,
            $name . ' Company' => $address->company,
            $name . ' City' => $address->city,
            $name . ' Zip' => $address->postcode,
            $name . ' Province' => $state->name,
            $name . ' Country' => $address->country,
            $name . ' Phone' => $address->phone,
        );
    }

    private $taxNames = array();

    private function getTaxName($taxId, $languageId)
    {
        if (!isset($this->taxNames[$taxId])) {
            $tax = new Tax($taxId);
            $taxNames = $tax->name;
            if (isset($taxNames[$languageId])) {
                $name = $taxNames[$languageId];
            } else {
                $name = array_pop($taxNames);
            }

            $this->taxNames[$taxId] = $name;
        }

        return $this->taxNames[$taxId];
    }

    /**
     * @param Order $order
     * @return string
     */
    private function getDiscountCode(Order $order)
    {
        $discountCode = '';
        $cartRules = $order->getCartRules();
        if (isset($cartRules[0])) {
            $cartRule = new CartRule($cartRules[0]['id_cart_rule']);
            $discountCode = $cartRule->code;
        }
        return $discountCode;
    }

    /**
     * @param Order $order
     * @return string
     */
    private function getShippingMethodName(Order $order)
    {
        $shippingMethod = '';
        $shippingData = $order->getShipping();
        if (isset($shippingData[0])) {
            $shippingMethod = $shippingData[0]['carrier_name'];
        }
        return $shippingMethod;
    }

    /**
     * @param string|DateTime $dateString
     * @return string
     */
    private function formatDate($dateString)
    {
        if ($dateString === '0000-00-00 00:00:00') {
            return '';
        }
        // 2019-04-25 14:23:59 -0400
        $date = $dateString instanceof DateTime ? $dateString : new DateTime($dateString);
        return $date->format(self::DATETIME_FORMAT);
    }

    /**
     * @param Order $order
     * @param string|array $stateIds
     * @return string the formatted date
     */
    private function getStateDate($order, $stateIds)
    {
        $stateIds = (array)$stateIds;

        $dates = array();
        foreach ($order->getHistory(1) as $history) {
            if (in_array((int)$history['id_order_state'], $stateIds)) {
                $dates[] = new DateTime($history['date_add']);
            }
        }
        if ($dates === array()) {
            return '';
        }
        return $this->formatDate(max($dates));
    }

    /**
     * @param Order $order
     * @return string
     */
    private function getPaymentMethod(Order $order)
    {
        $payments = $this->getOrderPayments($order);
        if (isset($payments[0])) {
            return $payments[0]->payment_method;
        }
        return '';
    }

    /**
     * @param Order $order
     * @return string
     */
    private function getPaymentReference(Order $order)
    {
        $payments = $this->getOrderPayments($order);
        if (isset($payments[0])) {
            return $payments[0]->payment_method;
        }
        return '';
    }

    /**
     * @param Order $order
     * @return string
     */
    private function getRefundedAmount(Order $order)
    {
        $payments = $this->getOrderPayments($order);
        return array_reduce($payments, function ($value, OrderPayment $payment) {
            if ($payment->amount < 0) {
                return $value - $payment->amount;
            }
            return $value;
        }, 0);
    }

    /**
     * @param Order $order
     * @return string;
     */
    private function getLastPaymentDate(Order $order)
    {
        $payments = $this->getOrderPayments($order);
        if ($payments === array()) {
            return '';
        }
        $dates = array_map(function (OrderPayment $payment) {
            return new DateTime($payment->date_add);
        }, $payments);

        $maxDate = max($dates);

        return $maxDate->format(self::DATETIME_FORMAT);
    }

    private $cachedOrderPayments = array();

    /**
     * @param Order $order
     * @return OrderPayment[]
     */
    private function getOrderPayments(Order $order)
    {
        if (!isset($this->cachedOrderPayments[$order->id])) {
            $this->cachedOrderPayments[$order->id] = $order->getOrderPayments();
        }
        return $this->cachedOrderPayments[$order->id];
    }

    /**
     * @param Order $order
     * @param $outstandingBalance
     * @return string
     */
    private function getPaidAtDate(Order $order, $outstandingBalance)
    {
        $paidAt = $this->getStateDate($order, array(
            DefaultOrderStates::PAYMENT_ACCEPTED,
            DefaultOrderStates::ON_BACKORDER_PAID,
            DefaultOrderStates::REMOTE_PAYMENT_ACCEPTED
        ));
        if ($paidAt === '' && $outstandingBalance <= 0) {
            $paidAt = $this->getLastPaymentDate($order);
        }
        return $paidAt;
    }

    /**
     * @param Order $order
     * @return string
     */
    private function getOrderFulfillmentStatus(Order $order)
    {
        return $this->formatDate($order->delivery_date) === '' ? 'unfulfilled' : 'fulfilled';
    }

    private function getItemFulfillmentStatus(Order $order, $product)
    {
        return $this->getOrderFulfillmentStatus($order) === 'fulfilled' ? 'fulfilled' : 'pending';
    }

    /**
     * @param array $product
     * @param string $languageId
     * @return string
     */
    private function getProductReference(array $product, $languageId)
    {
        $attributeId = (int)$product['product_attribute_id'];
        if ($attributeId === 0 || version_compare(_PS_VERSION_, '1.7', '<') === true) {
            return $this->findFirstValue($product, array('reference', 'supplier_reference'));
        }

        $productAttributes = $this->getProductAttributes($product['product_id'], $attributeId);
        return $this->findFirstValue($productAttributes, array('reference', 'supplier_reference'));
    }

    /**
     * @param array $product
     * @param string $languageId
     * @return string
     */
    private function getProductBarcode(array $product, $languageId)
    {
        $attributeId = (int)$product['product_attribute_id'];
        if ($attributeId === 0 || version_compare(_PS_VERSION_, '1.7', '<') === true) {
            return $this->findFirstValue($product, array('isbn', 'ean13', 'upc'));
        }
        $productAttributes = $this->getProductAttributes($product['product_id'], $attributeId);
        return $this->findFirstValue($productAttributes, array('isbn', 'ean13', 'upc'));
    }

    /**
     * Find the value of the first key that contains a truthy value in array
     *
     * @param array $data
     * @param array $keys
     * @return mixed|string
     */
    private function findFirstValue(array $data, array $keys)
    {
        foreach ($keys as $key) {
            if (isset($data[$key]) && $data[$key]) {
                return $data[$key];
            }
        }
        return '';
    }

    /**
     * @param array $product
     * @param array $taxDetails
     * @param int $languageId
     * @return array
     */
    private function makeProductTaxesArray(array $product, array $taxDetails, $languageId)
    {
        // Taxes
        $lineTaxes = array_filter($taxDetails, function ($taxDetail) use ($product) {
            return $product['id_order_detail'] == $taxDetail['id_order_detail'];
        });
        $taxes = array();
        $taxNumber = 1;
        foreach ($lineTaxes as $tax) {
            $taxes["Tax ${taxNumber} Name"] = $this->getTaxName((int)$tax['id_tax'], $languageId);
            $taxes["Tax ${taxNumber} Value"] = $tax['total_amount'];
            if (++$taxNumber > 5) {
                break;
            }
        }
        return $taxes;
    }

    private $attributesCache = array();

    private function getProductAttributes($productId, $attributeId)
    {
        $key = (int)$productId . '-' . (int)$attributeId;
        if (!isset($this->attributesCache[$key])) {
            $sql = 'SELECT pa.*
				FROM `' . _DB_PREFIX_ . 'product_attribute` pa
				WHERE pa.`id_product` = ' . (int)$productId . '
				AND pa.`id_product_attribute` = ' . (int)$attributeId . '
				LIMIT 1';

            $res = Db::getInstance()->executeS($sql);
            $this->attributesCache[$key] = isset($res[0]) ? $res[0] : array();
        }


        return $this->attributesCache[$key];
    }
}