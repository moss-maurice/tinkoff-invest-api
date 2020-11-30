<?php

namespace mmaurice\api\tinkoff\invest\builders;

use \mmaurice\api\tinkoff\invest\Client;

abstract class MethodBuilder extends \mmaurice\apigate\builders\MethodBuilder
{
    protected function headers()
    {
        return array_merge(parent::headers(), [
            'Authorization' => 'Bearer ' . Client::$config->getToken(),
            'Content-Type' => 'application/json; charset=utf-8',
        ]);
    }
}
