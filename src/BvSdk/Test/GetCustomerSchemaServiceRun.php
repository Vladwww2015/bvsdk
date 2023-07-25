<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetCustomerSchemaService;

class GetCustomerSchemaServiceRun extends AbstractGetSchemaServiceRun
{
    public static function get($apiUrl, $apiToken)
    {
        static::initInstance($apiUrl, $apiToken);
        return GetCustomerSchemaService::get();
    }
}
