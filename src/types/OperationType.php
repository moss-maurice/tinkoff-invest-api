<?php

namespace mmaurice\api\tinkoff\invest\types;

class OperationType extends \mmaurice\apigate\types\EnumType
{
    const OPERATION_TYPE_BUY = 'Buy';
    const OPERATION_TYPE_SELL = 'Sell';

    protected $options = [
        'enum' => [
            self::OPERATION_TYPE_BUY,
            self::OPERATION_TYPE_SELL,
        ],
    ];
}
