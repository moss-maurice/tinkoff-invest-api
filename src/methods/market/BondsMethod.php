<?php

namespace mmaurice\api\tinkoff\invest\methods\market;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\market\MarketInstrumentListResponseSchema;

final class BondsMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $schemas = [
        200 => MarketInstrumentListResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'market/bonds';
    }
}
