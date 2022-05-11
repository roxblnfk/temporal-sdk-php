<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/query.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.QueryResultType</code>
 */
class QueryResultType
{
    /**
     * Generated from protobuf enum <code>QUERY_RESULT_TYPE_UNSPECIFIED = 0;</code>
     */
    const QUERY_RESULT_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>QUERY_RESULT_TYPE_ANSWERED = 1;</code>
     */
    const QUERY_RESULT_TYPE_ANSWERED = 1;
    /**
     * Generated from protobuf enum <code>QUERY_RESULT_TYPE_FAILED = 2;</code>
     */
    const QUERY_RESULT_TYPE_FAILED = 2;

    private static $valueToName = [
        self::QUERY_RESULT_TYPE_UNSPECIFIED => 'QUERY_RESULT_TYPE_UNSPECIFIED',
        self::QUERY_RESULT_TYPE_ANSWERED => 'QUERY_RESULT_TYPE_ANSWERED',
        self::QUERY_RESULT_TYPE_FAILED => 'QUERY_RESULT_TYPE_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
