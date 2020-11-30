<?php

namespace mmaurice\api\tinkoff\invest\methods\orders;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\orders\MarketOrderResponseSchema;
use \mmaurice\api\tinkoff\invest\types\OperationType;

final class MarketMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'brokerAccountId' => [
            'string',
        ],
        'lots' => [
            'integer',
            true,
        ],
        'operation' => [
            'string',
            OperationType::class,
        ],
    ];

    protected static $params = [
        'figi',
        'brokerAccountId',
    ];

    protected static $schemas = [
        200 => MarketOrderResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::POST;
    }

    protected function url($url = '')
    {
        return 'orders/market-order';
    }
}
