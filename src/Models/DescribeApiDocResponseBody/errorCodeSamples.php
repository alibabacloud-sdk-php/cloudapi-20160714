<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\errorCodeSamples\errorCodeSample;
use AlibabaCloud\Tea\Model;

class errorCodeSamples extends Model
{
    /**
     * @var errorCodeSample[]
     */
    public $errorCodeSample;
    protected $_name = [
        'errorCodeSample' => 'ErrorCodeSample',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCodeSample) {
            $res['ErrorCodeSample'] = [];
            if (null !== $this->errorCodeSample && \is_array($this->errorCodeSample)) {
                $n = 0;
                foreach ($this->errorCodeSample as $item) {
                    $res['ErrorCodeSample'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorCodeSamples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCodeSample'])) {
            if (!empty($map['ErrorCodeSample'])) {
                $model->errorCodeSample = [];
                $n = 0;
                foreach ($map['ErrorCodeSample'] as $item) {
                    $model->errorCodeSample[$n++] = null !== $item ? errorCodeSample::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
