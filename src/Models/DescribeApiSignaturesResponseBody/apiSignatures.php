<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody\apiSignatures\apiSignatureItem;
use AlibabaCloud\Tea\Model;

class apiSignatures extends Model
{
    /**
     * @var apiSignatureItem[]
     */
    public $apiSignatureItem;
    protected $_name = [
        'apiSignatureItem' => 'ApiSignatureItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSignatureItem) {
            $res['ApiSignatureItem'] = [];
            if (null !== $this->apiSignatureItem && \is_array($this->apiSignatureItem)) {
                $n = 0;
                foreach ($this->apiSignatureItem as $item) {
                    $res['ApiSignatureItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSignatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSignatureItem'])) {
            if (!empty($map['ApiSignatureItem'])) {
                $model->apiSignatureItem = [];
                $n = 0;
                foreach ($map['ApiSignatureItem'] as $item) {
                    $model->apiSignatureItem[$n++] = null !== $item ? apiSignatureItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
