<?php

namespace BVSDK\BvSdk\Services;

class GetCustomerAddressSchemaService extends BaseService
{
    public static function get()
    {
        return static::$apiSDK->getResource('get-customer-address-schema');
    }
}
