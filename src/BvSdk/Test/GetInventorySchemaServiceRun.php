<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetInventorySchemaService;

class GetInventorySchemaServiceRun extends AbstractGetSchemaServiceRun
{
    public static function get($apiUrl, $apiToken)
    {
        static::initInstance($apiUrl, $apiToken);
        return GetInventorySchemaService::get();
    }
}
