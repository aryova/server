<?php

namespace ShopifyExport\Queries;

use Address;
use Country;
use Group;
use PrestaShopCollection;
use Shop;

/**
 * Export customers in the default Shopify CSV format
 * @see https://help.shopify.com/en/manual/customers/import-export-customers
 * The only difference is the addition of an extra **id** column
 */
class CustomerQuery implements ExportQuery
{
    public function execute($shopId, $languageId)
    {
        $customerCollection = new PrestaShopCollection('Customer', $languageId);
        $customerCollection->where('id_shop_group', '=', Shop::getContextShopGroupID());
        $customers = $customerCollection->getAll();

        foreach ($customers as $customer) {
            $addresses = $customer->getAddresses($languageId);

            if (count($addresses) > 0) {
                /** @var Address $address */
                $address = array_pop($addresses);
                $address['country_iso'] = Country::getIsoById($address['id_country']);
            } else {
                $address = array(
                    'address1' => '',
                    'address2' => '',
                    'city' => '',
                    'state' => '',
                    'state_iso' => '',
                    'country' => '',
                    'country_iso' => '',
                    'postcode' => '',
                    'phone' => '',
                );
            }

            yield $this->makeCustomerArray($customer, $address, $languageId);
        }
    }

    /**
     * @param \Customer $customer
     * @param array $address
     * @return array
     */
    private function makeCustomerArray($customer, $address, $languageId)
    {
        $customerGroups = array_map(function ($groupId) use ($languageId) {
            $group = new Group($groupId, $languageId);
            return $group->name;
        }, $customer->getGroups());

        return array(
            'id' => $customer->id,
            'First Name' => $customer->firstname,
            'Last Name' => $customer->lastname,
            'Email' => $customer->email,
            'Company' => $customer->company,
            'Address1' => $address['address1'],
            'Address2' => $address['address2'],
            'City' => $address['city'],
            'Province' => $address['state'],
            'Province Code' => $address['state_iso'],
            'Country' => $address['country'],
            'Country Code' => $address['country_iso'],
            'Zip' => $address['postcode'],
            'Phone' => $address['phone'],
            'Accepts Marketing' => $customer->newsletter ? 'yes' : 'no',
            'Note' => $customer->note,
            'Tags' => implode(",", $customerGroups),
        );
    }
}
