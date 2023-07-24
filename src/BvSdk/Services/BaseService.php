<?php

namespace BVSDK\BvSdk\Services;

use BVSDK\BvSdk\API\ApiSDKInterface;

abstract class BaseService
{
    protected static $apiSDK;

    protected static $instance;


    private function __construct() {}

    public static function initInstance(ApiSDKInterface $apiSDK = null) {
        if (!self::$instance) {
            self::$instance = self::class;

            self::$apiSDK = $apiSDK;
        }

        return self::$instance;
    }
}