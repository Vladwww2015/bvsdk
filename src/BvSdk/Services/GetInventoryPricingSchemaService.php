<?php

namespace BVSDK\BvSdk\Services;

class GetInventoryPricingSchemaService extends BaseService
{
    public static function get()
    {
        return static::$apiSDK->getResource('get-inventory-pricing-schema');
    }
}
