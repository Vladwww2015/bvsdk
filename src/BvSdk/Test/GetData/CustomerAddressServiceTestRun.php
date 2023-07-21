<?php

namespace BVSDK\BvSdk\Test\GetData;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Services\GetData\CustomerAddressService;

class CustomerAddressServiceTestRun
{
    public static function getCustomerAddress($apiUrl, $apiToken, $customerNumber = '1010TI', $addrType = 'S')
    {
        static::initInstance($apiUrl, $apiToken);

        return CustomerAddressService::getCustomerAddress($customerNumber, $addrType);
    }

    public static function getCustomerAddresses($apiUrl, $apiToken, $limit = 10)
    {
        static::initInstance($apiUrl, $apiToken);
        return CustomerAddressService::getCustomerAddresses($limit);
    }

    private static function initInstance($apiUrl, $apiToken)
    {
        CustomerAddressService::initInstance(ApiSDK::init($apiUrl, $apiToken));
    }
}
