<?php

namespace BVSDK\BvSdk\Test\GetData;

class GetDataAllTestRun
{
    /**
     * @param $apiUrl
     * @param $token
     * @return \Generator
     */
    public static function run($apiUrl, $token)
    {
        foreach (self::dataPool() as $method => $callbacks) {
            try {
                $data = $method($apiUrl, $token);
                $data = json_decode($data, true);
                if ($data['success']) {
                    yield $callbacks['accept'];
                    continue;
                }
                yield $callbacks['reject'];
            } catch (\Exception $e) {
                yield $callbacks['reject'];
                yield $e->getMessage();
            }
            sleep(1);
        }
    }

    /**
     * @return array[]
     */
    public static function dataPool()
    {
        return [
            '\BVSDK\BvSdk\Test\GetInventorySchemaServiceRun::get' => [
                'accept' => 'Inventory Schema Test Done',
                'reject' => 'Inventory Schema Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetInventoryStockSchemaServiceRun::get' => [
                'accept' => 'Inventory Stock Schema Test Done',
                'reject' => 'Inventory Stock Schema Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetInventoryPricingSchemaServiceRun::get' => [
                'accept' => 'Inventory Pricing Schema Test Done',
                'reject' => 'Inventory Pricing Schema Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetCustomerSchemaServiceRun::get' => [
                'accept' => 'Customer Schema Test Done',
                'reject' => 'Customer Schema Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetCustomerAddressSchemaServiceRun::get' => [
                'accept' => 'Customer Address Schema Test Done',
                'reject' => 'Customer Address Schema Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetOrderSchemaServiceRun::get' => [
                'accept' => 'Order Schema Test Done',
                'reject' => 'Order Schema Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\InventoryServiceTestRun::getInventory' => [
                'accept' => 'Inventory Service Test Done',
                'reject' => 'Inventory Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\InventoryServiceTestRun::getInventories' => [
                'accept' => 'Inventories Service Test Done',
                'reject' => 'Inventories Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\InventoryPricingServiceTestRun::getInventoriesPricing' => [
                'accept' => 'Inventories Pricing Service Test Done',
                'reject' => 'Inventories Pricing Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\InventoryPricingServiceTestRun::getInventoryPricing' => [
                'accept' => 'Inventory Pricing Service Test Done',
                'reject' => 'Inventory Pricing Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\InventoryStockServiceTestRun::getInventoriesStock' => [
                'accept' => 'Inventories Stock Service Test Done',
                'reject' => 'Inventories Stock Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\InventoryStockServiceTestRun::getInventoryStock' => [
                'accept' => 'Inventory Stock Service Test Done',
                'reject' => 'Inventory Stock Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\CustomerServiceTestRun::getCustomers' => [
                'accept' => 'Customers Service Test Done',
                'reject' => 'Customers Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\CustomerServiceTestRun::getCustomer' => [
                'accept' => 'Customer Service Test Done',
                'reject' => 'Customer Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\CustomerAddressServiceTestRun::getCustomerAddresses' => [
                'accept' => 'Customer Addresses Service Test Done',
                'reject' => 'Customer Addresses Service Test Failed'
            ],
            '\BVSDK\BvSdk\Test\GetData\CustomerAddressServiceTestRun::getCustomerAddress' => [
                'accept' => 'Customer Address Service Test Done',
                'reject' => 'Customer Address Service Test Failed'
            ]
        ];
    }
}
