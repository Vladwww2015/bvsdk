<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetCustomerAddressSchemaService;

class GetCustomerAddressSchemaServiceRun extends AbstractGetSchemaServiceRun
{
    public static function get($apiUrl, $apiToken)
    {
        static::initInstance($apiUrl, $apiToken);
        return GetCustomerAddressSchemaService::get();
    }
}
