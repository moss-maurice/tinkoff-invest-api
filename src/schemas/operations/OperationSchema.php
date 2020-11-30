<?php

namespace mmaurice\api\tinkoff\invest\schemas\operations;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\apigate\types\CurrencyType;
use \mmaurice\apigate\types\InstrumentType;
use \mmaurice\apigate\types\OperationTypeWithCommissionType;
use \mmaurice\apigate\types\DateIso8601Type;
use \mmaurice\api\tinkoff\invest\schemas\operations\OperationTradeSchema;
use \mmaurice\api\tinkoff\invest\schemas\MoneyAmountSchema;
use \mmaurice\api\tinkoff\invest\types\OperationStatusType;

class OperationSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'id' => [
            'string',
            true,
        ],
        'status' => [
            [
                'string',
                OperationStatusType::class,
            ],
            true,
        ],
        'trades' => [
            [
                OperationTradeSchema::class,
                ArrayType::class,
            ],
            true,
        ],
        'commission' => [
            MoneyAmountSchema::class,
        ],
        'currency' => [
            [
                'string',
                CurrencyType::class,
            ],
            true,
        ],
        'payment' => [
            'float',
            true,
        ],
        'price' => [
            'float',
        ],
        'quantity' => [
            'integer',
        ],
        'quantityExecuted' => [
            'integer',
        ],
        'figi' => [
            'string',
        ],
        'instrumentType' => [
            [
                'string',
                InstrumentType::class,
            ],
        ],
        'isMarginCall' => [
            'boolean',
            true,
        ],
        'date' => [
            [
                'string',
                DateIso8601Type::class,
            ],
            true,
        ],
        'operationType' => [
            [
                'string',
                OperationTypeWithCommissionType::class,
            ],
        ],
    ];
}
