<?php

namespace mmaurice\api\tinkoff\invest\schemas\portfolio;

use \mmaurice\api\tinkoff\invest\schemas\portfolio\PortfolioSchema;

class PortfolioResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            PortfolioSchema::class,
            true,
        ],
    ];
}
