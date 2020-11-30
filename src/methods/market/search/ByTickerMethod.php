<?php

namespace mmaurice\api\tinkoff\invest\methods\market\search;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\market\MarketInstrumentListResponseSchema;

final class ByTickerMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'ticker' => [
            'string',
            true,
        ],
    ];

    protected static $params = [
        'ticker',
    ];

    protected static $schemas = [
        200 => MarketInstrumentListResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'market/search/by-ticker';
    }
}
