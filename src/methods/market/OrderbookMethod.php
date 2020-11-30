<?php

namespace mmaurice\api\tinkoff\invest\methods\market;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\market\OrderbookResponseSchema;

final class OrderbookMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'depth' => [
            'integer',
            true
        ],
    ];

    protected static $params = [
        'figi',
        'depth',
    ];

    protected static $schemas = [
        200 => OrderbookResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'market/orderbook';
    }
}
