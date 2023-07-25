<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetOrderSchemaService;

class GetOrderSchemaServiceRun extends AbstractGetSchemaServiceRun
{
    public static function get($apiUrl, $apiToken)
    {
        static::initInstance($apiUrl, $apiToken);
        return GetOrderSchemaService::get();
    }
}
