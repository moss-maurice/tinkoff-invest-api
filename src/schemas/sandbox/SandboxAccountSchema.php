<?php

namespace mmaurice\api\tinkoff\invest\schemas\sandbox;

use \mmaurice\api\tinkoff\invest\types\BrokerAccountType;

class SandboxAccountSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'brokerAccountType' => [
            [
                'string',
                BrokerAccountType::class,
            ],
        ],
        'brokerAccountId' => [
            'string',
            true,
        ],
    ];
}
