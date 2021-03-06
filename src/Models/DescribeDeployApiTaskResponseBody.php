<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody\deployedResults;
use AlibabaCloud\Tea\Model;

class DescribeDeployApiTaskResponseBody extends Model
{
    /**
     * @var deployedResults
     */
    public $deployedResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deployedResults' => 'DeployedResults',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedResults) {
            $res['DeployedResults'] = null !== $this->deployedResults ? $this->deployedResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeployApiTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployedResults'])) {
            $model->deployedResults = deployedResults::fromMap($map['DeployedResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
