<?php

namespace BVSDK\BvSdk\Services;

class GetOrderSchemaService extends BaseService
{
    public static function get()
    {
        return static::$apiSDK->getResource('get-order-schema');
    }
}
