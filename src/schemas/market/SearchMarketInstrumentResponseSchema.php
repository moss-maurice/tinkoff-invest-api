<?php

namespace mmaurice\api\tinkoff\invest\schemas\market;

use \mmaurice\api\tinkoff\invest\schemas\market\SearchMarketInstrumentSchema;

class SearchMarketInstrumentResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            SearchMarketInstrumentSchema::class,
            true,
        ],
    ];
}
