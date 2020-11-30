<?php

namespace mmaurice\api\tinkoff\invest\schemas\portfolio;

use \mmaurice\api\tinkoff\invest\schemas\portfolio\CurrenciesSchema;

class PortfolioCurrenciesResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            CurrenciesSchema::class,
            true,
        ],
    ];
}
