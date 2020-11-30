<?php

namespace mmaurice\api\tinkoff\invest\methods\sandbox\positions;

use \mmaurice\apigate\types\NumberType;
use \mmaurice\api\tinkoff\invest\schemas\EmptySchema;
use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;

final class BalanceMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'brokerAccountId' => [
            'string',
        ],
        'figi' => [
            'string',
        ],
        'balance' => [
            [
                'double',
                NumberType::class,
            ],
            true,
        ],
    ];

    protected static $params = [
        'brokerAccountId',
    ];

    protected static $schemas = [
        200 => EmptySchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::POST;
    }

    protected function url($url = '')
    {
        return 'sandbox/positions/balance';
    }
}
