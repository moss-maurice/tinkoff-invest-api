<?php

namespace mmaurice\api\tinkoff\invest\methods\user;

use \mmaurice\api\tinkoff\invest\schemas\errors\ErrorSchema;
use \mmaurice\api\tinkoff\invest\schemas\user\UserAccountsResponseSchema;

final class AccountsMethod extends \mmaurice\api\tinkoff\invest\builders\MethodBuilder
{
    protected static $schemas = [
        200 => UserAccountsResponseSchema::class,
        500 => ErrorSchema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return 'user/accounts';
    }
}
