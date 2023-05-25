<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetListResponseBody;

use AlibabaCloud\Tea\Model;

class datasetInfoList extends Model
{
    /**
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 6304ce6b4ae6453f********
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example DatasetName
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example IP_WHITELIST_CIDR
     *
     * @var string
     */
    public $datasetType;

    /**
     * @example 2022-09-21T12:58:43Z
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'datasetId'    => 'DatasetId',
        'datasetName'  => 'DatasetName',
        'datasetType'  => 'DatasetType',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datasetInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
