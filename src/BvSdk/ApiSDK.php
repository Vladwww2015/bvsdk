<?php
namespace BVSDK\BvSdk;

use Box\Spout\Exceptions\SDKInitException;
use BVSDK\BvSdk\API\ApiSDKInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiSDK implements ApiSDKInterface
{
    private static $apiBaseUrl;
    private static $apiToken;
    private static $client;
    private static $contentType;

    public static function init($baseUrl, $apiToken, $contentType = 'application/json', array $additionalParams = [])
    {
        static::$apiBaseUrl = $baseUrl;
        static::$apiToken = $apiToken;
        static::$contentType = $contentType;
        static::$client = new Client();
    }

    public static function __callStatic($method, $args)
    {
        if(!static::$client) {
            throw new SDKInitException('Client has not been initialized. Call init method before');
        }

        return call_user_func_array(static::$method, $args);
    }

    public static function createResource($resourcePath, $data, $httpMethod = 'post', array $sendData = [])
    {
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

    public static function getResource($resourcePath, $id, $httpMethod = 'get', $sendData = [])
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

    public static function updateResource($resourcePath, $id, $data, $httpMethod = 'put', array $sendData = [])
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

    public static function deleteResource($resourcePath, $id, $httpMethod = 'delete', array $sendData = [])
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
       return rtrim(static::$apiBaseUrl, '/') . '/' . trim($resourcePath, '/') . '/';
    }
}
