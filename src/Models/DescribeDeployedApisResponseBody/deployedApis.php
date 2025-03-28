<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponseBody\deployedApis\deployedApiItem;
use AlibabaCloud\Tea\Model;

class deployedApis extends Model
{
    /**
     * @var deployedApiItem[]
     */
    public $deployedApiItem;
    protected $_name = [
        'deployedApiItem' => 'DeployedApiItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedApiItem) {
            $res['DeployedApiItem'] = [];
            if (null !== $this->deployedApiItem && \is_array($this->deployedApiItem)) {
                $n = 0;
                foreach ($this->deployedApiItem as $item) {
                    $res['DeployedApiItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployedApiItem'])) {
            if (!empty($map['DeployedApiItem'])) {
                $model->deployedApiItem = [];
                $n = 0;
                foreach ($map['DeployedApiItem'] as $item) {
                    $model->deployedApiItem[$n++] = null !== $item ? deployedApiItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
