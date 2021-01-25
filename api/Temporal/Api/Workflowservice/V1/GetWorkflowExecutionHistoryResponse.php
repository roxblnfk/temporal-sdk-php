<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetWorkflowExecutionHistoryResponse</code>
 */
class GetWorkflowExecutionHistoryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.history.v1.History history = 1;</code>
     */
    protected $history = null;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.DataBlob raw_history = 2;</code>
     */
    private $raw_history;
    /**
     * Generated from protobuf field <code>bytes next_page_token = 3;</code>
     */
    protected $next_page_token = '';
    /**
     * Generated from protobuf field <code>bool archived = 4;</code>
     */
    protected $archived = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\History\V1\History $history
     *     @type \Temporal\Api\Common\V1\DataBlob[]|\Google\Protobuf\Internal\RepeatedField $raw_history
     *     @type string $next_page_token
     *     @type bool $archived
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.history.v1.History history = 1;</code>
     * @return \Temporal\Api\History\V1\History
     */
    public function getHistory()
    {
        return isset($this->history) ? $this->history : null;
    }

    public function hasHistory()
    {
        return isset($this->history);
    }

    public function clearHistory()
    {
        unset($this->history);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.history.v1.History history = 1;</code>
     * @param \Temporal\Api\History\V1\History $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\History\V1\History::class);
        $this->history = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.DataBlob raw_history = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRawHistory()
    {
        return $this->raw_history;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.DataBlob raw_history = 2;</code>
     * @param \Temporal\Api\Common\V1\DataBlob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRawHistory($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Common\V1\DataBlob::class);
        $this->raw_history = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool archived = 4;</code>
     * @return bool
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Generated from protobuf field <code>bool archived = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setArchived($var)
    {
        GPBUtil::checkBool($var);
        $this->archived = $var;

        return $this;
    }

}
