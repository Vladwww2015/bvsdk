<?php

namespace BVSDK\BvSdk\API;

interface ApiSDKInterface
{
    public static function init($baseUrl, $apiToken, $contentType = 'application/json', array $additionalParams = []);

    public static function createResource($resourcePath, $data, $httpMethod = 'post', array $sendData = []);

    public static function getResource($resourcePath, $id, $httpMethod = 'get', $sendData = []);

    public static function updateResource($resourcePath, $id, $data, $httpMethod = 'put', array $sendData = []);

    public static function deleteResource($resourcePath, $id, $httpMethod = 'delete', array $sendData = []);
}
