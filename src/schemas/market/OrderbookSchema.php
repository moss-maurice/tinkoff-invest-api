<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\market\OrderResponseSchema;
use \mmaurice\api\tinkoff\invest\types\TradeStatusType;

class OrderbookSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
        'depth' => [
            'integer',
            true,
        ],
        'bids' => [
            [
                OrderResponseSchema::class,
                ArrayType::class,
            ],
            true,
        ],
        'asks' => [
            [
                OrderResponseSchema::class,
                ArrayType::class,
            ],
            true,
        ],
        'tradeStatus' => [
            [
                'string',
                TradeStatusType::class,
            ],
            true,
        ],
        'minPriceIncrement' => [
            'float',
            true,
        ],
        'faceValue' => [
            'float',
        ],
        'lastPrice' => [
            'float',
        ],
        'closePrice' => [
            'float',
        ],
        'limitUp' => [
            'float',
        ],
        'limitDown' => [
            'float',
        ],
    ];
}
