<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Entities\OrderAddress;
use BVSDK\BvSdk\Entities\SalesOrderDetail;
use BVSDK\BvSdk\Entities\SalesOrderHeader;
use BVSDK\BvSdk\Services\OrderService;

use BVSDK\BvSdk\Test\CreateOrderServiceRun\AttributeMapperTest;
use BVSDK\BvSdk\Test\CreateOrderServiceRun\FakerSalesOrderHeaderData;

class CreateOrderServiceRun
{
    public function create($apiUrl, $apiToken)
    {
        $salesOrderHeader = new SalesOrderHeader(new AttributeMapperTest());
        $salesOrderHeader->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderHeader());

        $salesOrderDetail1 = new SalesOrderDetail(new AttributeMapperTest());
        $salesOrderDetail1->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderDetail());

        $salesOrderDetail2 = new SalesOrderDetail(new AttributeMapperTest());
        $salesOrderDetail2->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderDetail());

        $orderAddress = new OrderAddress(new AttributeMapperTest());
        $orderAddress->setData(FakerSalesOrderHeaderData::generateFakeDataOrderAddress());

        $apiSDK = ApiSDK::init($apiUrl, $apiToken);
        OrderService::initInstance($apiSDK);

        OrderService::setOrderAddress($orderAddress);
        OrderService::setSalesOrderHeader($salesOrderHeader);
        OrderService::addSalesOrderDetail($salesOrderDetail1);
        OrderService::addSalesOrderDetail($salesOrderDetail2);
        OrderService::create();
    }
}
