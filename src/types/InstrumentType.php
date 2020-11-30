<?php

namespace mmaurice\api\tinkoff\invest\types;

class InstrumentType extends \mmaurice\apigate\types\EnumType
{
    const INSTRUMENT_TYPE_STOCK = 'Stock';
    const INSTRUMENT_TYPE_CURRENCY = 'Currency';
    const INSTRUMENT_TYPE_BOND = 'Bond';
    const INSTRUMENT_TYPE_ETF = 'Etf';

    protected $options = [
        'enum' => [
            self::INSTRUMENT_TYPE_STOCK,
            self::INSTRUMENT_TYPE_CURRENCY,
            self::INSTRUMENT_TYPE_BOND,
            self::INSTRUMENT_TYPE_ETF,
        ],
    ];
}
