<?php
namespace BVSDK\BvSdk\Services;

use Box\Spout\Exceptions\SDKInitException;
use BVSDK\BvSdk\API\ApiSDKInterface;
use BVSDK\BvSdk\Entities\OrderAddress;
use BVSDK\BvSdk\Entities\SalesOrderDetail;
use BVSDK\BvSdk\Entities\SalesOrderHeader;

class OrderService
{

    private static $_salesOrderHeader;
    private static $_salesOrderDetails = [];
    private static $_orderAddress;
    private static $apiSDK;

    private static $instance;


    private function __construct() {}

    public static function initInstance(ApiSDKInterface $apiSDK = null) {
        if (!self::$instance) {
<<<<<<< HEAD
            self::$instance = new self::class;
=======
            self::$instance = self::class;
>>>>>>> d13f581 (Tmp)
            self::$apiSDK = $apiSDK;
        }

        return self::$instance;
    }

    public static function setSalesOrderHeader(SalesOrderHeader $salesOrderHeader)
    {
        static::$_salesOrderHeader = $salesOrderHeader;

        return self::$instance;
    }

    public static function addSalesOrderDetail(SalesOrderDetail $salesOrderDetail)
    {
        static::$_salesOrderDetails[] = $salesOrderDetail;

        return self::$instance;
    }

    public static function setOrderAddress(OrderAddress $orderAddress)
    {
        static::$_orderAddress = $orderAddress;

        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array(static::$method, $args);
    }


    public static function create()
    {
        if(!static::$_orderAddress || !static::$_salesOrderHeader || !static::$_salesOrderDetails) {
            throw new SDKInitException('Incorrect data. Please check data for order address, order header and order details');
        }
        $data = [];
        $data['order_details'] = [];
        $data['order_header'] = static::$_salesOrderHeader->mapToBv();
        $data['order_address'] = static::$_orderAddress->mapToBv();
<<<<<<< HEAD
        array_map(fn($item) => $data['order_details'][] = $item->mapToBv(),static::$_salesOrderDetails);
=======
        array_map(function($item) use (&$data) {
            $data['order_details'][] = $item->mapToBv();
        }, static::$_salesOrderDetails);
>>>>>>> d13f581 (Tmp)

        static::$apiSDK::createResource('create-order', $data);

        self::resetData();
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
