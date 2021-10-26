<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponseBody\ipControlPolicyItems;
use AlibabaCloud\Tea\Model;

class DescribeIpControlPolicyItemsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var ipControlPolicyItems
     */
    public $ipControlPolicyItems;
    protected $_name = [
        'pageNumber'           => 'PageNumber',
        'requestId'            => 'RequestId',
        'pageSize'             => 'PageSize',
        'totalCount'           => 'TotalCount',
        'ipControlPolicyItems' => 'IpControlPolicyItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->ipControlPolicyItems) {
            $res['IpControlPolicyItems'] = null !== $this->ipControlPolicyItems ? $this->ipControlPolicyItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpControlPolicyItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['IpControlPolicyItems'])) {
            $model->ipControlPolicyItems = ipControlPolicyItems::fromMap($map['IpControlPolicyItems']);
        }

        return $model;
    }
}
