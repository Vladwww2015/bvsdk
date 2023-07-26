<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Entities\OrderAddress;
use BVSDK\BvSdk\Entities\SalesOrderDetail;
use BVSDK\BvSdk\Entities\SalesOrderHeader;
use BVSDK\BvSdk\Services\OrderService;
use BVSDK\BvSdk\Services\AttributeMapperToApiAppService;

use BVSDK\BvSdk\Test\CreateOrderServiceRun\AttributeMapperToApiAppTest;
use BVSDK\BvSdk\Test\CreateOrderServiceRun\FakerSalesOrderHeaderData;

class CreateOrderServiceRun
{
    public function create($apiUrl, $apiToken)
    {
        $attributeMapperService = new AttributeMapperToApiAppService(new AttributeMapperToApiAppTest());
        $salesOrderHeader = new SalesOrderHeader();
        $salesOrderHeader->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderHeader());
        $salesOrderHeader->setData($attributeMapperService->map($salesOrderHeader));

        $salesOrderDetail1 = new SalesOrderDetail();
        $salesOrderDetail1->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderDetail());
        $salesOrderDetail1->setData($attributeMapperService->map($salesOrderDetail1));

        $salesOrderDetail2 = new SalesOrderDetail();
        $salesOrderDetail2->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderDetail());
        $salesOrderDetail2->setData($attributeMapperService->map($salesOrderDetail2));

        $orderAddress = new OrderAddress();
        $orderAddress->setData(FakerSalesOrderHeaderData::generateFakeDataOrderAddress());
        $orderAddress->setData($attributeMapperService->map($orderAddress));

        $apiSDK = ApiSDK::init($apiUrl, $apiToken);
        OrderService::initInstance($apiSDK);

        OrderService::setOrderAddress($orderAddress);
        OrderService::setSalesOrderHeader($salesOrderHeader);
        OrderService::addSalesOrderDetail($salesOrderDetail1);
        OrderService::addSalesOrderDetail($salesOrderDetail2);
        OrderService::create();
    }
}
