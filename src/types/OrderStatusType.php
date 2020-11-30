<?php

namespace mmaurice\api\tinkoff\invest\types;

class OrderStatusType extends \mmaurice\apigate\types\EnumType
{
    const ORDER_STATUS_NEW = 'New';
    const ORDER_STATUS_PARTIALLY_FILL = 'PartiallyFill';
    const ORDER_STATUS_FILL = 'Fill';
    const ORDER_STATUS_CANCELLED = 'Cancelled';
    const ORDER_STATUS_REPLACED = 'Replaced';
    const ORDER_STATUS_PENDING_CANCEL = 'PendingCancel';
    const ORDER_STATUS_REJECTED = 'Rejected';
    const ORDER_STATUS_PENDING_REPLACE = 'PendingReplace';
    const ORDER_STATUS_PENDING_NEW = 'PendingNew';

    protected $options = [
        'enum' => [
            self::ORDER_STATUS_NEW,
            self::ORDER_STATUS_PARTIALLY_FILL,
            self::ORDER_STATUS_FILL,
            self::ORDER_STATUS_CANCELLED,
            self::ORDER_STATUS_REPLACED,
            self::ORDER_STATUS_PENDING_CANCEL,
            self::ORDER_STATUS_REJECTED,
            self::ORDER_STATUS_PENDING_REPLACE,
            self::ORDER_STATUS_PENDING_NEW,
        ],
    ];
}
