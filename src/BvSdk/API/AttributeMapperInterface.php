<?php
namespace BVSDK\BvSdk\API;

interface AttributeMapperInterface
{
    public function mapToBV(EntityInterface $entity = null): array;

    public function mapFromBV(EntityInterface $entity = null): array;
}
