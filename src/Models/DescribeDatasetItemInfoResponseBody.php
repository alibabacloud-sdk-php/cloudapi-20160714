<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemInfoResponseBody\datasetItemInfo;

class DescribeDatasetItemInfoResponseBody extends Model
{
    /**
     * @var datasetItemInfo
     */
    public $datasetItemInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetItemInfo' => 'DatasetItemInfo',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->datasetItemInfo) {
            $this->datasetItemInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetItemInfo) {
            $res['DatasetItemInfo'] = null !== $this->datasetItemInfo ? $this->datasetItemInfo->toArray($noStream) : $this->datasetItemInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetItemInfo'])) {
            $model->datasetItemInfo = datasetItemInfo::fromMap($map['DatasetItemInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
