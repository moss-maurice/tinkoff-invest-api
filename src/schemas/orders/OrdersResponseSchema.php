<?php

namespace mmaurice\api\tinkoff\invest\schemas\orders;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\orders\OrderSchema;

class OrdersResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'trackingId' => [
            'string',
            true,
        ],
        'status' => [
            'string',
            true,
            'Ok',
        ],
        'payload' => [
            [
                OrderSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
