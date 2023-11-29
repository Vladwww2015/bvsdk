<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class InventoryService extends BaseService
{
    public const LIMIT = 5000;

    public static function getInventory($whse, $code, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['whse'] = $whse;
        $searchCriteriaParams['code'] = $code;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventory', $searchCriteriaParams);
    }

    public static function getInventories(
        $limit = self::LIMIT,
        $offset = null,
        array $searchCriteria = [],
        array $columns = ['*']
    ) {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = (string) $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventories', $searchCriteriaParams);
    }
}
