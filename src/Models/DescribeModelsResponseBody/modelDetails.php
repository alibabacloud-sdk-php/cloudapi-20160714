<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails\modelDetail;
use AlibabaCloud\Tea\Model;

class modelDetails extends Model
{
    /**
     * @var modelDetail[]
     */
    public $modelDetail;
    protected $_name = [
        'modelDetail' => 'ModelDetail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelDetail) {
            $res['ModelDetail'] = [];
            if (null !== $this->modelDetail && \is_array($this->modelDetail)) {
                $n = 0;
                foreach ($this->modelDetail as $item) {
                    $res['ModelDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelDetail'])) {
            if (!empty($map['ModelDetail'])) {
                $model->modelDetail = [];
                $n = 0;
                foreach ($map['ModelDetail'] as $item) {
                    $model->modelDetail[$n++] = null !== $item ? modelDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
