<?php

namespace BVSDK\BvSdk\Test\GetData;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetData\InventoryService;

class InventoryServiceTestRun
{
    public static function getInventory($apiUrl, $apiToken, $whse = '00', $code = '000104617/AD')
    {
        static::initInstance($apiUrl, $apiToken);

        return InventoryService::getInventory($whse, $code);
    }

    public static function getInventories($apiUrl, $apiToken, $limit = 10)
    {
        static::initInstance($apiUrl, $apiToken);
        $result = InventoryService::getInventories($limit);
        return $result;
    }
    
    private static function initInstance($apiUrl, $apiToken)
    {
        InventoryService::initInstance(ApiSDK::init($apiUrl, $apiToken));
    }
}
