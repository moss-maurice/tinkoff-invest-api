<?php

namespace mmaurice\api\tinkoff\invest\types;

class TradeStatusType extends \mmaurice\apigate\types\EnumType
{
    const TRADE_STATUS_TYPE_NORMAL_TRADING = 'NormalTrading';
    const TRADE_STATUS_TYPE_NOT_AVAILABLE_FOR_TRADING = 'NotAvailableForTrading';

    protected $options = [
        'enum' => [
            self::TRADE_STATUS_TYPE_NORMAL_TRADING,
            self::TRADE_STATUS_TYPE_NOT_AVAILABLE_FOR_TRADING,
        ],
    ];
}
