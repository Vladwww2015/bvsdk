<?php

namespace BVSDK\BvSdk\Services;

class GetCustomerSchemaService extends BaseService
{
    public static function get()
    {
        return static::$apiSDK->getResource('get-customer-schema');
    }
}
