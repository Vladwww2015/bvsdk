<?php
namespace BVSDK\BvSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use BVSDK\BvSdk\Traits\ApiSdkTrait;
use BVSDK\BvSdk\API\ApiSDKInterface;
use BVSDK\BvSdk\Exceptions\SDKInitException;

class ApiSDK implements ApiSDKInterface
{
    use ApiSdkTrait;

    public static function createResource($resourcePath, array $sendData = [], \Closure $callback = null)
    {
        return self::create($resourcePath, $sendData, $callback);
    }

    public static function getResource($resourcePath, array $searchCriteriaParams = [], \Closure $callback = null)
    {
        return self::read($resourcePath, $searchCriteriaParams, $callback);
    }

    public static function updateResource($resourcePath, array $searchCriteriaParams = [], array $sendData = [], \Closure $callback = null)
    {
        return self::update($resourcePath, $searchCriteriaParams, $sendData, $callback);
    }

    public static function deleteResource($resourcePath, array $searchCriteriaParams = [], \Closure $callback = null)
    {
        return self::delete($resourcePath, $searchCriteriaParams, $callback);
    }
}
