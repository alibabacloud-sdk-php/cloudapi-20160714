<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponseBody\variables;
use AlibabaCloud\Tea\Model;

class DescribeApiStageResponseBody extends Model
{
    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var variables
     */
    public $variables;
    protected $_name = [
        'stageId'      => 'StageId',
        'modifiedTime' => 'ModifiedTime',
        'requestId'    => 'RequestId',
        'groupId'      => 'GroupId',
        'description'  => 'Description',
        'stageName'    => 'StageName',
        'createdTime'  => 'CreatedTime',
        'variables'    => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->variables) {
            $res['Variables'] = null !== $this->variables ? $this->variables->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiStageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Variables'])) {
            $model->variables = variables::fromMap($map['Variables']);
        }

        return $model;
    }
}
