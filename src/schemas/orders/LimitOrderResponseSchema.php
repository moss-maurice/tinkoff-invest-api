<?php

namespace mmaurice\api\tinkoff\invest\schemas\orders;

use \mmaurice\api\tinkoff\invest\schemas\orders\PlacedLimitOrderSchema;

class LimitOrderResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            PlacedLimitOrderSchema::class,
            true,
        ],
    ];
}
