<?php

namespace BVSDK\BvSdk\Test\CreateOrderServiceRun;

use BVSDK\BvSdk\API\AttributeMapperToApiAppInterface;
use BVSDK\BvSdk\API\EntityInterface;

class AttributeMapperToApiAppTest implements AttributeMapperToApiAppInterface
{
    
    public function map(EntityInterface $entity = null): array
    {
        return $entity->getData();
    }
}
