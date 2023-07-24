<?php
namespace BVSDK\BvSdk\API;

interface AttributeMapperInterface
{
    public function mapToApiApp(EntityInterface $entity = null): array;

    public function mapFromApiApp(EntityInterface $entity = null): array;
}
