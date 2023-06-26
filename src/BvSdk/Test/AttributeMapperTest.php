<?php

namespace BVSDK\BvSdk\Test;

use BVSDK\BvSdk\API\AttributeMapperInterface;
use BVSDK\BvSdk\API\EntityInterface;

class AttributeMapperTest implements AttributeMapperInterface
{

    public function mapToBV(EntityInterface $entity = null): array
    {
        return $entity->getData();
    }

    public function mapFromBV(EntityInterface $entity = null): array
    {
        return [];
    }
}
