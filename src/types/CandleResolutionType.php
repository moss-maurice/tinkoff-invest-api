<?php

namespace mmaurice\api\tinkoff\invest\types;

class CandleResolutionType extends \mmaurice\apigate\types\EnumType
{
    const CANDLE_RESOLUTION_TYPE_1MIN = '1min';
    const CANDLE_RESOLUTION_TYPE_2MIN = '2min';
    const CANDLE_RESOLUTION_TYPE_3MIN = '3min';
    const CANDLE_RESOLUTION_TYPE_5MIN = '5min';
    const CANDLE_RESOLUTION_TYPE_10MIN = '10min';
    const CANDLE_RESOLUTION_TYPE_15MIN = '15min';
    const CANDLE_RESOLUTION_TYPE_30MIN = '30min';
    const CANDLE_RESOLUTION_TYPE_HOUR = 'hour';
    const CANDLE_RESOLUTION_TYPE_DAY = 'day';
    const CANDLE_RESOLUTION_TYPE_WEEK = 'week';
    const CANDLE_RESOLUTION_TYPE_MONTH = 'month';

    protected $options = [
        'enum' => [
            self::CANDLE_RESOLUTION_TYPE_1MIN,
            self::CANDLE_RESOLUTION_TYPE_2MIN,
            self::CANDLE_RESOLUTION_TYPE_3MIN,
            self::CANDLE_RESOLUTION_TYPE_5MIN,
            self::CANDLE_RESOLUTION_TYPE_10MIN,
            self::CANDLE_RESOLUTION_TYPE_15MIN,
            self::CANDLE_RESOLUTION_TYPE_30MIN,
            self::CANDLE_RESOLUTION_TYPE_HOUR,
            self::CANDLE_RESOLUTION_TYPE_DAY,
            self::CANDLE_RESOLUTION_TYPE_WEEK,
            self::CANDLE_RESOLUTION_TYPE_MONTH,
        ],
    ];
}
