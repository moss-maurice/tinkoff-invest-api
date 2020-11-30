<?php

namespace mmaurice\api\tinkoff\invest\methods\orders;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\orders\LimitOrderResponseSchema;
use \mmaurice\api\tinkoff\invest\types\OperationType;

final class LimitMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
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
        'price' => [
            'float',
            true,
        ],
    ];

    protected static $params = [
        'figi',
        'brokerAccountId',
    ];

    protected static $schemas = [
        200 => LimitOrderResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::POST;
    }

    protected function url($url = '')
    {
        return 'orders/limit-order';
    }
}
