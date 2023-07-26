<?php
namespace BVSDK\BvSdk\Services;


use BVSDK\BvSdk\API\OrderAddressInterface;
use BVSDK\BvSdk\API\SalesOrderDetailInterface;
use BVSDK\BvSdk\API\SalesOrderHeaderInterface;
use BVSDK\BvSdk\Exceptions\SDKInitException;
use BVSDK\BvSdk\API\ApiSDKInterface;
use BVSDK\BvSdk\Entities\OrderAddress;
use BVSDK\BvSdk\Entities\SalesOrderDetail;
use BVSDK\BvSdk\Entities\SalesOrderHeader;

class OrderService extends BaseService
{

    private static $_salesOrderHeader;
    private static $_salesOrderDetails = [];
    private static $_orderAddress;


    public static function setSalesOrderHeader(SalesOrderHeaderInterface $salesOrderHeader)
    {
        static::$_salesOrderHeader = $salesOrderHeader;

        return self::$instance;
    }

    public static function addSalesOrderDetail(SalesOrderDetailInterface $salesOrderDetail)
    {
        static::$_salesOrderDetails[] = $salesOrderDetail;

        return self::$instance;
    }

    public static function setOrderAddress(OrderAddressInterface $orderAddress)
    {
        static::$_orderAddress = $orderAddress;

        return self::$instance;
    }

    public static function create()
    {
        if(!static::$_orderAddress || !static::$_salesOrderHeader || !static::$_salesOrderDetails) {
            throw new SDKInitException('Incorrect data. Please check data for order address, order header and order details');
        }
        $data = [];

        $data['order_detail'] = [];
        $data['order_header'] = static::$_salesOrderHeader->getData();
        $data['order_address'] = static::$_orderAddress->getData();

        array_map(function($item) use (&$data) {
            $data['order_detail'][] = $item->getData();
        }, static::$_salesOrderDetails);

        $result = static::$apiSDK->createResource('create-order', $data);

        self::resetData();

        return $result;
    }

    public static function update()
    {

    }

    private static function resetData()
    {
        static::$_salesOrderHeader = null;
        static::$_orderAddress = null;
        static::$_salesOrderDetails = [];
    }

}
