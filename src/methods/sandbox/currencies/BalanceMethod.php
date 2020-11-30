<?php

namespace mmaurice\api\tinkoff\invest\methods\sandbox\currencies;

use \mmaurice\apigate\types\NumberType;
use \mmaurice\api\tinkoff\invest\schemas\EmptySchema;
use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\types\SandboxCurrencyType;

final class BalanceMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $rules = [
        'brokerAccountId' => [
            'string',
        ],
        'currency' => [
            [
                'string',
                SandboxCurrencyType::class,
            ],
            true,
        ],
        'balance' => [
            [
                'double',
                NumberType::class,
            ],
            true,
        ],
    ];

    protected static $params = [
        'brokerAccountId',
    ];

    protected static $schemas = [
        200 => EmptySchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::POST;
    }

    protected function url($url = '')
    {
        return 'sandbox/currencies/balance';
    }

    /*protected function urlParams()
    {
        return array_filter([
            'brokerAccountId' => property_exists($this, 'brokerAccountId') ? $this->brokerAccountId : null,
        ]);
    }

    protected function body()
    {
        return array_filter([
            'currency' => property_exists($this, 'currency') ? $this->currency : null,
            'balance' => property_exists($this, 'balance') ? $this->balance : null,
        ]);
    }*/
}
