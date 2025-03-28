<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteMonitorGroupRequest extends Model
{
    /**
     * @description The ID of the API group. This ID is generated by the system and globally unique.
     *
     * This parameter is required.
     *
     * @example 42925e7f5209438186d5560239af5286
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the monitoring group.
     *
     * @example 166636221
     *
     * @var int
     */
    public $rawMonitorGroupId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'groupId' => 'GroupId',
        'rawMonitorGroupId' => 'RawMonitorGroupId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->rawMonitorGroupId) {
            $res['RawMonitorGroupId'] = $this->rawMonitorGroupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RawMonitorGroupId'])) {
            $model->rawMonitorGroupId = $map['RawMonitorGroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
