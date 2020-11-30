<?php

namespace mmaurice\api\tinkoff\invest\schemas\portfolio;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\portfolio\CurrencyPositionSchema;

class CurrenciesSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'currencies' => [
            [
                CurrencyPositionSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
