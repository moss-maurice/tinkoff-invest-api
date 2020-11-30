<?php

namespace mmaurice\api\tinkoff\invest\schemas\operations;

class OperationTradeSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'tradeId' => [
            'string',
            true,
        ],
        'date' => [
            'string',
            true,
        ],
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
