<?php

namespace mmaurice\api\tinkoff\invest\schemas;

use \mmaurice\api\tinkoff\invest\types\CurrencyType;

class MoneyAmountSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'currency' => [
            [
                'string',
                CurrencyType::class,
            ],
            true,
        ],
        'value' => [
            'float',
            true,
        ],
    ];
}
