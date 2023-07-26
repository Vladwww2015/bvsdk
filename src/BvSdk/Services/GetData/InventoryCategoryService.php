<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class InventoryCategoryService extends BaseService
{
    public const LIMIT = 5000;

    /**
     * @param $code
     * @param array $searchCriteria
     * @param array $columns
     * @return mixed
     */
    public static function getInventoryCategory($code, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['code'] = $code;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventory/category', $searchCriteriaParams);
    }

    /**
     * @param $limit
     * @param $offset
     * @param array $searchCriteria
     * @param array $columns
     * @return mixed
     */
    public static function getInventoryCategories(
        $limit = self::LIMIT,
        $offset = null,
        array $searchCriteria = [],
        array $columns = ['*']
    ) {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = (string)  $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventory/categories', $searchCriteriaParams);
    }
}
