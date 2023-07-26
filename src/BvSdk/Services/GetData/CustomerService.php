<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class CustomerService extends BaseService
{
    public const LIMIT = 5000;

    public static function getCustomer($customerNumber, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['cus_no'] = $customerNumber;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('customer', $searchCriteriaParams);
    }

    public static function getCustomers($limit = self::LIMIT, $offset = null, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = (string) $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('customers', $searchCriteriaParams);
    }
}
