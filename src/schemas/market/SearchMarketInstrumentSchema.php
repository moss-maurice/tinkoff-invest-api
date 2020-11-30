<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

use \mmaurice\api\tinkoff\invest\types\CurrencyType;
use \mmaurice\api\tinkoff\invest\types\InstrumentType;

class SearchMarketInstrumentSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'ticker' => [
            'string',
            true,
        ],
        'isin' => [
            'string',
        ],
        'minPriceIncrement' => [
            'float',
        ],
        'lot' => [
            'integer',
            true,
        ],
        'currency' => [
            [
                'string',
                CurrencyType::class,
            ],
        ],
        'name' => [
            'string',
            true,
        ],
        'type' => [
            [
                'string',
                InstrumentType::class,
            ],
            true,
        ],
    ];
}
