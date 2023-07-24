<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetOrderSchemaService;

class AbstractGetSchemaServiceRun
{
    public static function initInstance($apiUrl, $apiToken)
    {
        $apiSDK = ApiSDK::init($apiUrl, $apiToken);

        GetOrderSchemaService::initInstance($apiSDK);
    }
}