<?php

namespace mmaurice\api\tinkoff\invest\example\configs;

final class SandboxConfig extends \mmaurice\api\tinkoff\invest\configs\DefaultConfig
{
    protected $options = [
        # URL
        'url' => 'https://api-invest.tinkoff.ru/openapi/sandbox/',
        # OpenAPI token
        'token' => '',
    ];
}
