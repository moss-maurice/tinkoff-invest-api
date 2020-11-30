<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

class OrderResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'price' => [
            'float',
            true,
        ],
        'quantity' => [
            'integer',
            true,
        ],
    ];
}
