<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

use \mmaurice\apigate\types\DateIso8601Type;
use \mmaurice\api\tinkoff\invest\types\CandleResolutionType;

class CandleSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
        'o' => [
            'float',
            true,
        ],
        'c' => [
            'float',
            true,
        ],
        'h' => [
            'float',
            true,
        ],
        'l' => [
            'float',
            true,
        ],
        'v' => [
            'integer',
            true,
        ],
        'time' => [
            [
                'string',
                DateIso8601Type::class,
            ],
            true,
        ],
    ];
}
