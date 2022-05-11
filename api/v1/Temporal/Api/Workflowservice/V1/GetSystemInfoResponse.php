<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetSystemInfoResponse</code>
 */
class GetSystemInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Version of the server.
     *
     * Generated from protobuf field <code>string server_version = 1;</code>
     */
    protected $server_version = '';
    /**
     * All capabilities the system supports.
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.GetSystemInfoResponse.Capabilities capabilities = 2;</code>
     */
    protected $capabilities = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $server_version
     *           Version of the server.
     *     @type \Temporal\Api\Workflowservice\V1\GetSystemInfoResponse\Capabilities $capabilities
     *           All capabilities the system supports.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Version of the server.
     *
     * Generated from protobuf field <code>string server_version = 1;</code>
     * @return string
     */
    public function getServerVersion()
    {
        return $this->server_version;
    }

    /**
     * Version of the server.
     *
     * Generated from protobuf field <code>string server_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServerVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_version = $var;

        return $this;
    }

    /**
     * All capabilities the system supports.
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.GetSystemInfoResponse.Capabilities capabilities = 2;</code>
     * @return \Temporal\Api\Workflowservice\V1\GetSystemInfoResponse\Capabilities|null
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    public function hasCapabilities()
    {
        return isset($this->capabilities);
    }

    public function clearCapabilities()
    {
        unset($this->capabilities);
    }

    /**
     * All capabilities the system supports.
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.GetSystemInfoResponse.Capabilities capabilities = 2;</code>
     * @param \Temporal\Api\Workflowservice\V1\GetSystemInfoResponse\Capabilities $var
     * @return $this
     */
    public function setCapabilities($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\GetSystemInfoResponse\Capabilities::class);
        $this->capabilities = $var;

        return $this;
    }

}
