<?php

namespace mmaurice\api\tinkoff\invest\schemas\orders;

use \mmaurice\api\tinkoff\invest\schemas\orders\PlacedMarketOrderSchema;

class MarketOrderResponseSchema extends \mmaurice\api\tinkoff\invest\schemas\orders\LimitOrderResponseSchema
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
            PlacedMarketOrderSchema::class,
            true,
        ],
    ];
}
