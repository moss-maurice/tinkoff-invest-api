<?php

namespace mmaurice\api\tinkoff\invest\schemas\errors;

class ErrorPayloadSchema extends \mmaurice\apigate\builders\SchemaBuilder
{
    protected static $rules = [
        'message' => [
            'string',
        ],
        'code' => [
            'string',
        ],
    ];
}
