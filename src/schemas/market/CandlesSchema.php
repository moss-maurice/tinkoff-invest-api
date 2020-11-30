<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\market\CandleSchema;
use \mmaurice\api\tinkoff\invest\types\CandleResolutionType;

class CandlesSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'interval' => [
            [
                'string',
                CandleResolutionType::class,
            ],
            true,
        ],
        'candles' => [
            [
                CandleSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
