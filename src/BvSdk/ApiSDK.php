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

    public static function createResource($resourcePath, $data, $httpMethod = 'post', array $sendData = [])
    {
        return self::create($resourcePath, $data, $httpMethod, $sendData);
    }

    public static function getResource($resourcePath, $id, $httpMethod = 'get', $sendData = [])
    {
        return self::read($resourcePath, $id, $httpMethod, $sendData);
    }

    public static function updateResource($resourcePath, $id, $data, $httpMethod = 'put', array $sendData = [])
    {
        return self::update($resourcePath, $id, $data, $httpMethod, $sendData);
    }

    public static function deleteResource($resourcePath, $id, $httpMethod = 'delete', array $sendData = [])
    {
        return self::delete($resourcePath, $id, $httpMethod, $sendData);
    }
}
