<?php

namespace mmaurice\api\tinkoff\invest\schemas\user;

use \mmaurice\api\tinkoff\invest\types\BrokerAccountType;

class UserAccountSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
