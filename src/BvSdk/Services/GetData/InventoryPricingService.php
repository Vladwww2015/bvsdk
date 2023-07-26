<?php

namespace BVSDK\BvSdk\Services\GetData;

use BVSDK\BvSdk\Services\BaseService;

class InventoryPricingService extends BaseService
{
    public const LIMIT = 5000;

    public static function getInventoryPricing($whse, $partNo, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['bvspecpricewhse'] = $whse;
        $searchCriteriaParams['bvspecpricepartno'] = $partNo;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventory/pricing', $searchCriteriaParams);
    }

    public static function getInventoriesPricing($limit = self::LIMIT, $offset = null, array $searchCriteria = [], array $columns = ['*'])
    {
        $searchCriteriaParams = [];
        $searchCriteriaParams['offset'] = (string) $offset;
        $searchCriteriaParams['limit'] = $limit;
        $searchCriteriaParams['columns'] = $columns;
        $searchCriteriaParams['search_criteria'] = $searchCriteria;

        return static::$apiSDK->getResource('inventories/pricing', $searchCriteriaParams);
    }
}
