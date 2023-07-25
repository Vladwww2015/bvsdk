<?php

namespace BVSDK\BvSdk\Services;

class GetInventoryStockSchemaService extends BaseService
{
    public static function get()
    {
        return static::$apiSDK->getResource('get-inventory-stock-schema');
    }
}
