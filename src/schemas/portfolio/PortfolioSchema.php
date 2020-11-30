<?php

namespace mmaurice\api\tinkoff\invest\schemas\portfolio;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\portfolio\PortfolioPositionSchema;

class PortfolioSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'positions' => [
            [
                PortfolioPositionSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
