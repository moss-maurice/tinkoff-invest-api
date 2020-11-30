<?php

namespace mmaurice\api\tinkoff\invest\schemas\user;

use \mmaurice\api\tinkoff\invest\schemas\user\UserAccountsSchema;

class UserAccountsResponseSchema extends \mmaurice\apigate\builders\SchemaBuilder
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
            UserAccountsSchema::class,
            true,
        ],
    ];
}
