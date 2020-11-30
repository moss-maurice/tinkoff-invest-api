<?php

namespace mmaurice\api\tinkoff\invest\schemas\operations;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\operations\OperationSchema;

class OperationsSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'operations' => [
            [
                OperationSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
