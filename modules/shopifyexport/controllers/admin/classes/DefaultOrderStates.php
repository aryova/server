<?php


namespace ShopifyExport;


abstract class DefaultOrderStates
{
    const AWAITING_CHECK_PAYMENT = 1;
    const PAYMENT_ACCEPTED = 2;
    const PROCESSING_IN_PROGRESS = 3;
    const SHIPPED = 4;
    const DELIVERED = 5;
    const CANCELED = 6;
    const REFUNDED = 7;
    const PAYMENT_ERROR = 8;
    const ON_BACKORDER_PAID = 9;
    const AWAITING_BANK_WIRE_PAYMENT = 10;
    const REMOTE_PAYMENT_ACCEPTED = 11;
    const ON_BACKORDER_NOT_PAID = 12;
    const AWAITING_CASH_ON_DELIVERY = 13;
}