<?php

namespace mmaurice\api\tinkoff\invest\schemas\sandbox;

use \mmaurice\api\tinkoff\invest\schemas\sandbox\SandboxAccountSchema;

class SandboxRegisterResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            SandboxAccountSchema::class,
            true,
        ],
    ];
}
