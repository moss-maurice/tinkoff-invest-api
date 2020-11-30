<?php

namespace mmaurice\api\tinkoff\invest\methods\sandbox;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\sandbox\SandboxRegisterResponseSchema;
use \mmaurice\api\tinkoff\invest\types\BrokerAccountType;

final class RegisterMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'brokerAccountType' => [
            [
                'string',
                BrokerAccountType::class,
            ],
        ],
    ];

    protected static $schemas = [
        200 => SandboxRegisterResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::POST;
    }

    protected function url($url = '')
    {
        return 'sandbox/register';
    }
}
