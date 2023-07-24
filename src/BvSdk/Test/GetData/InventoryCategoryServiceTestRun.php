<?php

namespace BVSDK\BvSdk\Test\GetData;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetData\InventoryCategoryService;

class InventoryCategoryServiceTestRun
{
    public static function getInventoryCategory($apiUrl, $apiToken, $whse = '00', $code = '000104617/AD')
    {
        static::initInstance($apiUrl, $apiToken);

        return InventoryCategoryService::getInventoryCategory($whse, $code);
    }

    public static function getInventoryCategories($apiUrl, $apiToken, $limit = 10)
    {
        static::initInstance($apiUrl, $apiToken);
        $result = InventoryCategoryService::getInventoryCategories($limit);
        return $result;
    }
    
    private static function initInstance($apiUrl, $apiToken)
    {
        InventoryCategoryService::initInstance(ApiSDK::init($apiUrl, $apiToken));
    }
}
