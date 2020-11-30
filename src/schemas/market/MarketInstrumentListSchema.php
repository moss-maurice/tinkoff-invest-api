<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\market\MarketInstrumentSchema;

class MarketInstrumentListSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'total' => [
            'integer',
            true,
        ],
        'instruments' => [
            [
                MarketInstrumentSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
