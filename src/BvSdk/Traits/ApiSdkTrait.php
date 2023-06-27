<?php

namespace BVSDK\BvSdk\Traits;

use BVSDK\BvSdk\Exceptions\MethodDoesNotExists;
use BVSDK\BvSdk\Exceptions\SDKInitException;
use BVSDK\BvSdk\API\ApiSDKInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

trait ApiSdkTrait
{
    private static $apiBaseUrl;
    private static $apiToken;
    private static $client;
    private static $contentType;
    private static $methodMap = [
        'create' => '_createResource',
        'update' => '_updateResource',
        'delete' => '_deleteResource',
        'read' => '_getResource',

    ];

    private function __construct(){}

    public static function init($baseUrl, $apiToken, $contentType = 'application/json', array $additionalParams = [])
    {
        ini_set('xdebug.remote_connect_back', 1);
        static::$apiBaseUrl = $baseUrl;
        static::$apiToken = $apiToken;
        static::$contentType = $contentType;
        static::$client = new Client();

        return new self();
    }

    public static function __callStatic($method, $args)
    {
        if(!static::$client) {
            throw new SDKInitException('Client has not been initialized. Call init method before');
        }

        $realMethod = static::$methodMap[$method] ?? false;
        if (!$realMethod) {
            throw new MethodDoesNotExists('Method: ' . $method . ' does not exists');
        }

        return call_user_func_array([self::class, $realMethod], $args);
    }

    private static function _createResource($resourcePath, $data, $httpMethod = 'post', array $sendData = [])
    {
        ini_set('xdebug.remote_connect_back', 1);
        $url = static::getApiUrl($resourcePath);
        $sendData['headers'] = $sendData['headers'] ?? [];
        $sendData['headers']['Content-Type'] = static::$contentType;
        $sendData['headers']['Authorization'] = 'Bearer ' . static::$apiToken;
        $sendData['json'] = $data;

        try {
            $response = static::$client->$httpMethod($url, $sendData);

            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }

    private static function _getResource($resourcePath, $id, $httpMethod = 'get', $sendData = [])
    {
        $url = static::getApiUrl($resourcePath) . $id;
        $sendData['headers'] = $sendData['headers'] ?? [];
        $sendData['headers']['Authorization'] = 'Bearer ' . static::$apiToken;

        try {
            $response = static::$client->$httpMethod($url, $sendData);

            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }

    private static function _updateResource($resourcePath, $id, $data, $httpMethod = 'put', array $sendData = [])
    {
        $url = static::getApiUrl($resourcePath) . $id;

        $sendData['headers'] = $data['headers'] ?? [];
        $sendData['headers']['Authorization'] = 'Bearer ' . static::$apiToken;
        $sendData['headers']['Content-Type'] = static::$contentType;
        $sendData['json'] = $data;

        try {
            $response = static::$client->$httpMethod($url, $sendData);

            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }

    private static function _deleteResource($resourcePath, $id, $httpMethod = 'delete', array $sendData = [])
    {
        $url = static::getApiUrl($resourcePath) . $id;
        $sendData['headers'] = $sendData['headers'] ?? [];
        $sendData['headers']['Authorization'] = 'Bearer ' . static::$apiToken;

        try {
            $response = static::$client->$httpMethod($url, $sendData);

            return $response->getBody()->getContents();
        } catch (RequestException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }

    private static function getApiUrl($resourcePath)
    {
       return rtrim(static::$apiBaseUrl, '/') . '/' . trim($resourcePath, '/');
    }
}
