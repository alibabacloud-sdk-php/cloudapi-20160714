<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DryRunSwaggerShrinkRequest extends Model
{
    /**
     * @description The Swagger text content.
     *
     * This parameter is required.
     *
     * @example "A Swagger API definition in YAML"
     *
     * @var string
     */
    public $data;

    /**
     * @description The Swagger text format:
     *
     *   json
     *   yaml
     *
     * This parameter is required.
     *
     * @example yaml
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @description The global condition.
     *
     * @example {}
     *
     * @var string
     */
    public $globalConditionShrink;

    /**
     * @description The ID of the API group.
     *
     * This parameter is required.
     *
     * @example d633cf5524f841b9950e245b191bdabf
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether to overwrite the existing API.
     *
     * APIs with the same HTTP request type and backend request path are considered the same.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'data' => 'Data',
        'dataFormat' => 'DataFormat',
        'globalConditionShrink' => 'GlobalCondition',
        'groupId' => 'GroupId',
        'overwrite' => 'Overwrite',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->globalConditionShrink) {
            $res['GlobalCondition'] = $this->globalConditionShrink;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DryRunSwaggerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['GlobalCondition'])) {
            $model->globalConditionShrink = $map['GlobalCondition'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
