<?php

namespace BVSDK\BvSdk\Services;

class GetInventorySchemaService extends BaseService
{
    public static function get()
    {
        return static::$apiSDK->getResource('get-inventory-schema');
    }
}
