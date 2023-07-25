<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetInventoryStockSchemaService;

class GetInventoryStockSchemaServiceRun extends AbstractGetSchemaServiceRun
{
    public static function get($apiUrl, $apiToken)
    {
        static::initInstance($apiUrl, $apiToken);
        return GetInventoryStockSchemaService::get();
    }
}
