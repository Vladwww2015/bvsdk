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

    public static function createResource($resourcePath, $data, $httpMethod = 'post', array $sendData = [], \Closure $callback = null)
    {
        return self::create($resourcePath, $data, $httpMethod, $sendData, $callback);
    }

    public static function getResource($resourcePath, $id = '', $httpMethod = 'get', $sendData = [], \Closure $callback = null)
    {
        return self::read($resourcePath, $id, $httpMethod, $sendData, $callback);
    }

    public static function updateResource($resourcePath, $data, $id = '', $httpMethod = 'put', array $sendData = [], \Closure $callback = null)
    {
        return self::update($resourcePath, $id, $data, $httpMethod, $sendData, $callback);
    }

    public static function deleteResource($resourcePath, $id = '', $httpMethod = 'delete', array $sendData = [], \Closure $callback = null)
    {
        return self::delete($resourcePath, $id, $httpMethod, $sendData, $callback);
    }
}
