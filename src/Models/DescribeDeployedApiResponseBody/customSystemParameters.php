<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\customSystemParameters\customSystemParameter;
use AlibabaCloud\Tea\Model;

class customSystemParameters extends Model
{
    /**
     * @var customSystemParameter[]
     */
    public $customSystemParameter;
    protected $_name = [
        'customSystemParameter' => 'CustomSystemParameter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSystemParameter) {
            $res['CustomSystemParameter'] = [];
            if (null !== $this->customSystemParameter && \is_array($this->customSystemParameter)) {
                $n = 0;
                foreach ($this->customSystemParameter as $item) {
                    $res['CustomSystemParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSystemParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSystemParameter'])) {
            if (!empty($map['CustomSystemParameter'])) {
                $model->customSystemParameter = [];
                $n = 0;
                foreach ($map['CustomSystemParameter'] as $item) {
                    $model->customSystemParameter[$n++] = null !== $item ? customSystemParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
