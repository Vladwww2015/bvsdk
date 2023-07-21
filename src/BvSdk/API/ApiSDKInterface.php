<?php

namespace BVSDK\BvSdk\API;

interface ApiSDKInterface
{
    public static function init($baseUrl, $apiToken, $contentType = 'application/json', array $additionalParams = []);
    
    public static function createResource($resourcePath, array $sendData = [], \Closure $callback = null);

    public static function getResource($resourcePath, array $searchCriteria = [], \Closure $callback = null);

    public static function updateResource($resourcePath, array $searchCriteria = [], array $sendData = [], \Closure $callback = null);

    public static function deleteResource($resourcePath, array $searchCriteria = [], \Closure $callback = null);
}
