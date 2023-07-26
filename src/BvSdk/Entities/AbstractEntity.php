<?php

namespace BVSDK\BvSdk\Entities;

use BVSDK\BvSdk\API\AttributeMapperInterface;
use BVSDK\BvSdk\API\EntityInterface;

abstract class AbstractEntity implements EntityInterface
{
    /**
     * @var array
     */
    protected $_data = [];

    public function setData(array $data)
    {
        $this->_data = $data;

        return $this;
    }

    public function getData(string $key = null)
    {
        return $key ? ($this->_data[$key] ?? null) : $this->_data;
    }

    public function addData(string $key, $value)
    {
        $this->_data[$key] = $value;

        return $this;
    }
}
