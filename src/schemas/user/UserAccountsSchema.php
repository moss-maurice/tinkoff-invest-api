<?php

namespace mmaurice\api\tinkoff\invest\schemas\user;

use \mmaurice\apigate\types\ArrayType;
use \mmaurice\api\tinkoff\invest\schemas\user\UserAccountSchema;

class UserAccountsSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'accounts' => [
            [
                UserAccountSchema::class,
                ArrayType::class,
            ],
            true,
        ],
    ];
}
