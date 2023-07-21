<?php

namespace BVSDK\BvSdk\Test\GetData;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetData\InventoryPricingService;

class InventoryPricingServiceTestRun
{
    public static function getInventoryPricing($apiUrl, $apiToken, $whse = '00', $partNo = '000106730/AA')
    {
        static::initInstance($apiUrl, $apiToken);

        $result = InventoryPricingService::getInventoryPricing($whse, $partNo);
        return $result;
    }

    public static function getInventoriesPricing($apiUrl, $apiToken, $limit = 10)
    {
        static::initInstance($apiUrl, $apiToken);
        $result = InventoryPricingService::getInventoriesPricing($limit);
        return $result;
    }

    private static function initInstance($apiUrl, $apiToken)
    {
        InventoryPricingService::initInstance(ApiSDK::init($apiUrl, $apiToken));
    }
}
