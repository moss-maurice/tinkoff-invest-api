<?php

namespace mmaurice\api\tinkoff\invest\schemas\portfolio;

use \mmaurice\api\tinkoff\invest\types\CurrencyType;

class CurrencyPositionSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'currency' => [
            [
                'string',
                CurrencyType::class,
            ],
            true,
        ],
        'balance' => [
            'double',
            true,
        ],
        'blocked' => [
            'double',
        ],
    ];
}
