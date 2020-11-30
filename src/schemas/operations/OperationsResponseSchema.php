<?php

namespace mmaurice\api\tinkoff\invest\schemas\operations;

use \mmaurice\api\tinkoff\invest\schemas\operations\OperationsSchema;

class OperationsResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'trackingId' => [
            'string',
            true,
        ],
        'status' => [
            'string',
            true,
            'Ok',
        ],
        'payload' => [
            OperationsSchema::class,
            true,
        ],
    ];
}
