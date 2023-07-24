<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class InventoryCategoryService extends BaseService
{
    public const LIMIT = 5000;

    public static function getInventoryCategory($code, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['code'] = $code;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;
        
        return static::$apiSDK->getResource('inventory/category', $searchCriteriaParams);
    }

    public static function getInventoryCategories(
        $limit = self::LIMIT, 
        $offset = null, 
        array $searchCriteria = [],
        array $columns = ['*']
    ) {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;
        
        return static::$apiSDK->getResource('inventory/categories', $searchCriteriaParams);
    }
}
