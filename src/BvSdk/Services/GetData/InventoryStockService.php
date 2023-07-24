<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class InventoryStockService extends BaseService
{
    public const LIMIT = 50000;

    public static function getInventoryStock($whse, $code, array $searchCriteria = [], array $columns = [])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['whse'] = $whse;
        $searchCriteriaParams['code'] = $code;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventory/stock', $searchCriteriaParams);
    }

    public static function getInventoriesStock($limit = self::LIMIT, $offset = null, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventories/stock', $searchCriteriaParams);
    }
}
