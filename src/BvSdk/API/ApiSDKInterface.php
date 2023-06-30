<?php

namespace BVSDK\BvSdk\API;

interface ApiSDKInterface
{
    public static function init($baseUrl, $apiToken, $contentType = 'application/json', array $additionalParams = []);

    public static function createResource($resourcePath, $data, $httpMethod = 'post', array $sendData = [], \Closure $callback = null);

    public static function getResource($resourcePath, $id = '', $httpMethod = 'get', $sendData = [], \Closure $callback = null);

    public static function updateResource($resourcePath, $data, $id = '', $httpMethod = 'put', array $sendData = [], \Closure $callback = null);

    public static function deleteResource($resourcePath, $id = '', $httpMethod = 'delete', array $sendData = [], \Closure $callback = null);
}
