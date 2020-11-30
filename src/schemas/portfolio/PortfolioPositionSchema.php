<?php

namespace mmaurice\api\tinkoff\invest\schemas\portfolio;

use \mmaurice\api\tinkoff\invest\schemas\MoneyAmountSchema;
use \mmaurice\api\tinkoff\invest\types\InstrumentType;

class PortfolioPositionSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'ticker' => [
            'string',
        ],
        'isin' => [
            'string',
        ],
        'instrumentType' => [
            [
                'string',
                InstrumentType::class,
            ],
            true,
        ],
        'balance' => [
            'float',
            true,
        ],
        'blocked' => [
            'float',
        ],
        'expectedYield' => [
            MoneyAmountSchema::class,
        ],
        'lots' => [
            'integer',
            true,
        ],
        'averagePositionPrice' => [
            MoneyAmountSchema::class,
        ],
        'averagePositionPriceNoNkd' => [
            MoneyAmountSchema::class,
        ],
        'name' => [
            'string',
            true,
        ],
    ];
}
