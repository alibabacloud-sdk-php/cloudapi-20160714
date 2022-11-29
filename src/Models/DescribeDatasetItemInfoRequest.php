<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatasetItemInfoRequest extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetItemId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'datasetItemId' => 'DatasetItemId',
        'securityToken' => 'SecurityToken',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetItemId) {
            $res['DatasetItemId'] = $this->datasetItemId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatasetItemInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetItemId'])) {
            $model->datasetItemId = $map['DatasetItemId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}