<?php

namespace mmaurice\api\tinkoff\invest\types;

class CurrencyType extends \mmaurice\apigate\types\EnumType
{
    const CURRENCY_TYPE_RUB = 'RUB';
    const CURRENCY_TYPE_USD = 'USD';
    const CURRENCY_TYPE_EUR = 'EUR';
    const CURRENCY_TYPE_GBP = 'GBP';
    const CURRENCY_TYPE_HKD = 'HKD';
    const CURRENCY_TYPE_CHF = 'CHF';
    const CURRENCY_TYPE_JPY = 'JPY';
    const CURRENCY_TYPE_CNY = 'CNY';
    const CURRENCY_TYPE_TRY = 'TRY';

    protected $options = [
        'enum' => [
            self::CURRENCY_TYPE_RUB,
            self::CURRENCY_TYPE_USD,
            self::CURRENCY_TYPE_EUR,
            self::CURRENCY_TYPE_GBP,
            self::CURRENCY_TYPE_HKD,
            self::CURRENCY_TYPE_CHF,
            self::CURRENCY_TYPE_JPY,
            self::CURRENCY_TYPE_CNY,
            self::CURRENCY_TYPE_TRY,
        ],
    ];
}
