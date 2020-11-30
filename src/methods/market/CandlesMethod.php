<?php

namespace mmaurice\api\tinkoff\invest\methods\market;

use \mmaurice\apigate\types\DateIso8601Type;
use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\market\CandlesResponseSchema;
use \mmaurice\api\tinkoff\invest\types\CandleResolutionType;

final class CandlesMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'from' => [
            [
                'string',
                DateIso8601Type::class,
            ],
            true,
        ],
        'to' => [
            [
                'string',
                DateIso8601Type::class,
            ],
            true,
        ],
        'interval' => [
            [
                'string',
                CandleResolutionType::class,
            ],
            true
        ],
    ];

    protected static $params = [
        'figi',
        'from',
        'to',
        'interval',
    ];

    protected static $schemas = [
        200 => CandlesResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'market/candles';
    }
}
