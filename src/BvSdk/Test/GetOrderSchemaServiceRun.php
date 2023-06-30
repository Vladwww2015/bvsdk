<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetOrderSchemaService;

class GetOrderSchemaServiceRun
{
    public function get($apiUrl, $apiToken)
    {
        $apiSDK = ApiSDK::init($apiUrl, $apiToken);

        GetOrderSchemaService::initInstance($apiSDK);
        $result = GetOrderSchemaService::get();
    }
}
