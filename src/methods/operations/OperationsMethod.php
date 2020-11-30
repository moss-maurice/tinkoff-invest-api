<?php

namespace mmaurice\api\tinkoff\invest\methods\operations;

use \mmaurice\apigate\types\DateIso8601Type;
use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\operations\OperationsResponseSchema;

final class OperationsMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
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
        'figi' => [
            'string',
        ],
        'brokerAccountId' => [
            'string',
        ],
    ];

    protected static $params = [
        'from',
        'to',
        'figi',
        'brokerAccountId',
    ];

    protected static $schemas = [
        200 => OperationsResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'operations';
    }
}
