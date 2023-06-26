<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\ApiSDK;
use BVSDK\BvSdk\Entities\OrderAddress;
use BVSDK\BvSdk\Entities\SalesOrderDetail;
use BVSDK\BvSdk\Entities\SalesOrderHeader;
use BVSDK\BvSdk\Services\OrderService;

class CreateOrderServiceRun
{
    public function create()
    {
        $salesOrderHeader = new SalesOrderHeader(new AttributeMapperTest());
        $salesOrderHeader->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderHeader());

        $salesOrderDetail1 = new SalesOrderDetail(new AttributeMapperTest());
        $salesOrderDetail1->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderDetails());

        $salesOrderDetail2 = new SalesOrderDetail(new AttributeMapperTest());
        $salesOrderDetail2->setData(FakerSalesOrderHeaderData::generateFakeDataSalesOrderDetails());

        $orderAddress = new OrderAddress(new AttributeMapperTest());
        $orderAddress->setData(FakerSalesOrderHeaderData::generateFakeDataOrderAddress());

        ApiSDK::init('http://localhost:8000/api/', 'fDx7MZccntnmzNB3RePsCHkY4RGSdnG5mQxOuG3U');
        OrderService::setOrderAddress($orderAddress);
        OrderService::setSalesOrderHeader($salesOrderHeader);
        OrderService::addSalesOrderDetail($salesOrderDetail1);
        OrderService::addSalesOrderDetail($salesOrderDetail2);
        OrderService::create();
    }
}
