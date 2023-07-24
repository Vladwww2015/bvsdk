<?php

namespace BVSDK\BvSdk\Test\CreateOrderServiceRun;

use BVSDK\BvSdk\API\AttributeMapperInterface;
use BVSDK\BvSdk\API\EntityInterface;

class AttributeMapperTest implements AttributeMapperInterface
{

    public function mapToApiApp(EntityInterface $entity = null): array
    {
        return $entity->getData();
    }

    public function mapFromApiApp(EntityInterface $entity = null): array
    {
        return [];
    }
}
