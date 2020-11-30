<?php

namespace mmaurice\api\tinkoff\invest\schemas\errors;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorPayloadSchema;

class ErrorSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'trackingId' => [
            'string',
            true,
        ],
        'status' => [
            'string',
            true,
            'Error',
        ],
        'payload' => [
            ErrorPayloadSchema::class,
            true,
        ],
    ];
}
