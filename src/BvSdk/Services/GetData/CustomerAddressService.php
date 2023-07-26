<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class CustomerAddressService extends BaseService
{
    public const LIMIT = 5000;

    public static function getCustomerAddress($customerNumber, $addressType, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['cev_no'] = $customerNumber;
        $searchCriteriaParams['addr_type'] = $addressType;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('customer/address', $searchCriteriaParams);
    }

    public static function getCustomerAddresses($limit = self::LIMIT, $offset = null, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = (string) $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('customer/addresses', $searchCriteriaParams);
    }
}
