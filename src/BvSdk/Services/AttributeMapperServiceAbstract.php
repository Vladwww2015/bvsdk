<?php

namespace BVSDK\BvSdk\Services;

use BVSDK\BvSdk\API\AttributeMapperInterface;
use BVSDK\BvSdk\API\EntityInterface;

class AttributeMapperServiceAbstract
{
    /**
     * @var AttributeMapperInterface
     */
    protected $attributeMapper;

    /**
     * @param AttributeMapperInterface $attributeMapper
     */
    public function __construct(
        AttributeMapperInterface $attributeMapper
    ) {
        $this->attributeMapper = $attributeMapper;
    }

    public function map(EntityInterface $entity = null): array
    {
        return $this->attributeMapper->map($entity);
    }
}