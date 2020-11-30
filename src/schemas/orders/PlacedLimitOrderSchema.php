<?php

namespace mmaurice\api\tinkoff\invest\schemas\orders;

use \mmaurice\api\tinkoff\invest\schemas\MoneyAmountSchema;
use \mmaurice\api\tinkoff\invest\types\OperationType;
use \mmaurice\api\tinkoff\invest\types\OrderStatusType;

class PlacedLimitOrderSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'orderId' => [
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
        'rejectReason' => [
            'string',
        ],
        'message' => [
            'string',
        ],
        'requestedLots' => [
            'integer',
            true,
        ],
        'executedLots' => [
            'integer',
            true,
        ],
        'commission' => [
            [
                'string',
                MoneyAmountSchema::class,
            ],
        ],
    ];
}
