<?php

namespace BVSDK\BvSdk\Test\GetData;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetData\CustomerService;

class CustomerServiceTestRun
{
    public static function getCustomer($apiUrl, $apiToken, $customerNumber = '1010TI')
    {
        static::initInstance($apiUrl, $apiToken);

        $result = CustomerService::getCustomer($customerNumber);
        return $result;
    }

    public static function getCustomers($apiUrl, $apiToken, $limit = 10)
    {
        static::initInstance($apiUrl, $apiToken);
        $result = CustomerService::getCustomers($limit);
        return $result;
    }

    private static function initInstance($apiUrl, $apiToken)
    {
        CustomerService::initInstance(ApiSDK::init($apiUrl, $apiToken));
    }
}
