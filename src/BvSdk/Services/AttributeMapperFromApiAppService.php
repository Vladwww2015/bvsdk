<?php

namespace BVSDK\BvSdk\Services;

use BVSDK\BvSdk\API\AttributeMapperFromApiAppInterface;

class AttributeMapperFromApiAppService extends AttributeMapperServiceAbstract
{
    /**
     * @param AttributeMapperToApiAppInterface $attributeMapper
     */
    public function __construct(
        AttributeMapperFromApiAppInterface $attributeMapper
    ) {
        parent::__construct($attributeMapper);
    }
}