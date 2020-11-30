<?php

namespace mmaurice\api\tinkoff\invest\methods\orders;

use \mmaurice\api\tinkoff\invest\schemas\EmptySchema;
use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;

final class CancelMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'orderId' => [
            'string',
            true,
        ],
        'brokerAccountId' => [
            'string',
        ],
    ];

    protected static $params = [
        'orderId',
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
        return 'orders/cancel';
    }
}
