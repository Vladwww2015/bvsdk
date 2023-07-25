<?php

namespace BVSDK\BvSdk\Test\GetData;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetData\InventoryStockService;

class InventoryStockServiceTestRun
{
    public static function getInventoryStock($apiUrl, $apiToken, $whse = '00', $code = '000110054/AB')
    {
        static::initInstance($apiUrl, $apiToken);

        return InventoryStockService::getInventoryStock($whse, $code);
    }

    public static function getInventoriesStock($apiUrl, $apiToken, $limit = 10)
    {
        static::initInstance($apiUrl, $apiToken);
        return InventoryStockService::getInventoriesStock($limit);
    }

    private static function initInstance($apiUrl, $apiToken)
    {
        InventoryStockService::initInstance(ApiSDK::init($apiUrl, $apiToken));
    }
}
