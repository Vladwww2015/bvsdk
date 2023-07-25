<?php

namespace BVSDK\BvSdk\API;

interface EntityInterface
{
    public function getData(string $key = null);
    public function setData(array $data);
    public function addData(string $key, $value);
}
