<?php

namespace mmaurice\api\tinkoff\invest\configs;

abstract class DefaultConfig extends \mmaurice\apigate\configs\Config
{
    protected $options = [
        # URL
        'url' => '',
        # OpenAPI token
        'token' => '',
    ];
}
