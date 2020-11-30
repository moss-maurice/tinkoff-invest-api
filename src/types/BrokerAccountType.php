<?php

namespace mmaurice\api\tinkoff\invest\types;

class BrokerAccountType extends \mmaurice\apigate\types\EnumType
{
    const BROKER_ACCOUNT_TYPE_TINKOFF = 'Tinkoff';
    const BROKER_ACCOUNT_TYPE_TINKOFF_IS = 'TinkoffIis';

    protected $options = [
        'enum' => [
            self::BROKER_ACCOUNT_TYPE_TINKOFF,
            self::BROKER_ACCOUNT_TYPE_TINKOFF_IS,
        ],
    ];
}
