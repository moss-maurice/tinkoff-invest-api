<?php

namespace mmaurice\api\tinkoff\invest\schemas\orders;

use \mmaurice\api\tinkoff\invest\types\OperationType;
use \mmaurice\api\tinkoff\invest\types\OrderStatusType;
use \mmaurice\api\tinkoff\invest\types\OrderType;

class OrderSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'orderId' => [
            'string',
            true,
        ],
        'figi' => [
            'string',
            true,
        ],
        'operation' => [
            [
                'string',
                OperationType::class,
            ],
            true,
        ],
        'status' => [
            [
                'string',
                OrderStatusType::class,
            ],
            true,
        ],
        'requestedLots' => [
            'integer',
            true,
        ],
        'executedLots' => [
            'integer',
            true,
        ],
        'type' => [
            [
                'string',
                OrderType::class,
            ],
            true,
        ],
        'price' => [
            'float',
            true,
        ],
    ];
}
