<?php

namespace mmaurice\api\tinkoff\invest\types;

class OrderType extends \mmaurice\apigate\types\EnumType
{
    const ORDER_TYPE_LIMIT = 'Limit';
    const ORDER_TYPE_MARKET = 'Market';

    protected $options = [
        'enum' => [
            self::ORDER_TYPE_LIMIT,
            self::ORDER_TYPE_MARKET,
        ],
    ];
}
