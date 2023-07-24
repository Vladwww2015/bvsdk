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
    
    public function mapToApiApp(EntityInterface $entity = null): array
    {
        return $this->attributeMapper->mapToApiApp($this);
    }

    public function mapFromApiApp(EntityInterface $entity = null): array
    {
        return $this->attributeMapper->mapFromApiApp($this);
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
