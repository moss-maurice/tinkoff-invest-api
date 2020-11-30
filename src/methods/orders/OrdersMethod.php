<?php

namespace mmaurice\api\tinkoff\invest\methods\orders;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\orders\OrdersResponseSchema;

final class OrdersMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'brokerAccountId' => [
            'string',
        ],
    ];

    protected static $params = [
        'brokerAccountId',
    ];

    protected static $schemas = [
        200 => OrdersResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'orders';
    }
}
