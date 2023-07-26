<?php
namespace BVSDK\BvSdk\API;

interface AttributeMapperInterface
{
    public function map(EntityInterface $entity = null): array;
}
