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
    private static $client;
    private static $methodMap = [
        'create' => '_createResource',
        'update' => '_updateResource',
        'delete' => '_deleteResource',
        'read' => '_getResource',

    ];

    private function __construct(){}

    public static function init($baseUrl, $apiToken, $contentType = 'application/json', array $headers = ['Accept' => 'application/json'])
    {
        static::$apiBaseUrl = $baseUrl;
        if(empty($headers['Authorization'])) {
            $headers['Authorization'] = 'Bearer ' . $apiToken;
        }
        $headers['Content-Type'] = $contentType;
        static::$client = new Client(['base_url' => $baseUrl, 'headers' => $headers]);

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

    private static function _createResource(
        $resourcePath,

        array $data = [],
        \Closure $callback = null
    ) {
        $httpMethod = 'post';
        $url = static::getApiUrlByHttpMethod($httpMethod, $resourcePath);
        $sendData = [
            'json' => $data
        ];
        
        return static::_sendRequest($url, $sendData, $httpMethod, $callback);
    }

    private static function _getResource(
        $resourcePath,
        array $searchCriteriaParams = [],
        \Closure $callback = null
    ) {
        $httpMethod = 'get';
        $url = static::getApiUrlByHttpMethod($httpMethod, $resourcePath, $searchCriteriaParams);
        $requestData = [];
        static::_prepareSearchCriteriaRequestData($requestData, $searchCriteriaParams);


        return static::_sendRequest($url, $requestData, $httpMethod, $callback);
    }

    private static function _updateResource(
        $resourcePath,
        array $searchCriteriaParams = [],
        array $sendData = [],
        \Closure $callback = null
    ) {
        $httpMethod = 'put';
        $requestData = [
            'json' => [
                'data' => $sendData
            ]
        ];
        $url = static::getApiUrlByHttpMethod($httpMethod, $resourcePath);
        static::_prepareSearchCriteriaRequestData($requestData, $searchCriteriaParams);
        
        return static::_sendRequest($url, $sendData, $httpMethod, $callback);
    }

    private static function _deleteResource(
        $resourcePath,
        array $searchCriteriaParams = [],
        \Closure $callback = null
    ) {
        $httpMethod = 'delete';
        $url = static::getApiUrlByHttpMethod($httpMethod, $resourcePath, $searchCriteriaParams);
        $requestData = [
            'json' => [
                'data' => $sendData
            ]
        ];


        return static::_sendRequest($url, $requestData, $httpMethod, $callback);
    }

    private static function _sendRequest($url, $sendData, $httpMethod, \Closure $callback = null)
    {
        try {
            if(is_callable($callback)) {
                $callback(static::$client->$httpMethod($url, $sendData));
            } else {
                $response = static::$client->$httpMethod($url, $sendData);

                return $response->getBody()->getContents();
            }
        } catch (RequestException $e) {
            throw new \Exception('API request failed: ' . $e->getMessage());
        }
    }
    
    private static function getApiUrlByHttpMethod($httpMethod, $resourcePath, array $searchCriteriaParams = [])
    {
        $searchCriteriaParams = array_filter($searchCriteriaParams, function($searchCriteriaParam) {
            return !is_array($searchCriteriaParam);
        });

        switch (strtoupper($httpMethod)) {
            case 'GET':
            case 'DELETE':
                return rtrim(static::$apiBaseUrl, '/') . '/' . trim($resourcePath, '/') . ($searchCriteriaParams ? '?' . http_build_query($searchCriteriaParams) : '');
            case 'PUT':
            case 'POST':
                return rtrim(static::$apiBaseUrl, '/') . '/' . trim($resourcePath, '/');
        }

        throw new \Exception(sprintf('Http Method %s does not exists', $httpMethod));
    }

    /**
     * @param array $requestData
     * @param array $searchCriteriaParams
     */
    private static function _prepareSearchCriteriaRequestData(array &$requestData = [], array $searchCriteriaParams = [])
    {
        $searchCriteria = $searchCriteriaParams['search_criteria'] ?? [];
        $columns = $searchCriteriaParams['columns'] ?? [];
        $requestData['json'] = $requestData['json'] ?? [];
        $requestData['json']['search_criteria'] = [];

        if($searchCriteria) {
            $requestData['json']['search_criteria']['criteria'] = $searchCriteriaParams;
        }

        if($columns) {
            $requestData['json']['search_criteria']['columns'] = $searchCriteriaParams;
        }
    }
}
