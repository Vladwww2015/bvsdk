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
}
