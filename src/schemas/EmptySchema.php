<?php

namespace mmaurice\api\tinkoff\invest\schemas;

use \mmaurice\apigate\schemas\DataSchema;

class EmptySchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            DataSchema::class,
            false,
            [],
        ],
    ];
}
