<?php

namespace mmaurice\api\tinkoff\invest\methods\market\search;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\market\SearchMarketInstrumentResponseSchema;

final class ByFigiMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'figi' => [
            'string',
            true,
        ],
    ];

    protected static $params = [
        'figi',
    ];

    protected static $schemas = [
        200 => SearchMarketInstrumentResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'market/search/by-figi';
    }
}
