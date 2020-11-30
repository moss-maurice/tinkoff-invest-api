<?php

namespace mmaurice\api\tinkoff\invest\types;

class OperationStatusType extends \mmaurice\apigate\types\EnumType
{
    const OPERATION_STATUS_TYPE_DONE = 'Done';
    const OPERATION_STATUS_TYPE_DECLINE = 'Decline';
    const OPERATION_STATUS_TYPE_PROGRESS = 'Progress';

    protected $options = [
        'enum' => [
            self::OPERATION_STATUS_TYPE_DONE,
            self::OPERATION_STATUS_TYPE_DECLINE,
            self::OPERATION_STATUS_TYPE_PROGRESS,
        ],
    ];
}
