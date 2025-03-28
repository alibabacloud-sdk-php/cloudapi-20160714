<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\constantParameters\constantParameter;
use AlibabaCloud\Tea\Model;

class constantParameters extends Model
{
    /**
     * @var constantParameter[]
     */
    public $constantParameter;
    protected $_name = [
        'constantParameter' => 'ConstantParameter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->constantParameter) {
            $res['ConstantParameter'] = [];
            if (null !== $this->constantParameter && \is_array($this->constantParameter)) {
                $n = 0;
                foreach ($this->constantParameter as $item) {
                    $res['ConstantParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return constantParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstantParameter'])) {
            if (!empty($map['ConstantParameter'])) {
                $model->constantParameter = [];
                $n = 0;
                foreach ($map['ConstantParameter'] as $item) {
                    $model->constantParameter[$n++] = null !== $item ? constantParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
