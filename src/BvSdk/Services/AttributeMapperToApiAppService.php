<?php

namespace BVSDK\BvSdk\Services;

use BVSDK\BvSdk\API\AttributeMapperToApiAppInterface;

class AttributeMapperToApiAppService extends AttributeMapperServiceAbstract
{
    /**
     * @param AttributeMapperToApiAppInterface $attributeMapper
     */
    public function __construct(
        AttributeMapperToApiAppInterface $attributeMapper
    ) {
        parent::__construct($attributeMapper);
    }
}