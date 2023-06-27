<?php

namespace BVSDK\BvSdk\Entities;

use BVSDK\BvSdk\API\AttributeMapperInterface;
use BVSDK\BvSdk\API\EntityInterface;

abstract class AbstractEntity implements AttributeMapperInterface, EntityInterface
{
    /**
     * @var AttributeMapperInterface
     */
    protected $attributeMapper;

    /**
     * @var array
     */
    protected $_data = [];

    public function __construct(AttributeMapperInterface $attributeMapper)
    {
        $this->attributeMapper = $attributeMapper;
    }

    public function mapToBV(EntityInterface $entity = null): array
    {
        return $this->attributeMapper->mapToBV($this);
    }

    public function mapFromBV(EntityInterface $entity = null): array
    {
        return $this->attributeMapper->mapFromBV($this);
    }

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
