<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\customDomains\domainItem;
use AlibabaCloud\Tea\Model;

class customDomains extends Model
{
    /**
     * @var domainItem[]
     */
    public $domainItem;
    protected $_name = [
        'domainItem' => 'DomainItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainItem) {
            $res['DomainItem'] = [];
            if (null !== $this->domainItem && \is_array($this->domainItem)) {
                $n = 0;
                foreach ($this->domainItem as $item) {
                    $res['DomainItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainItem'])) {
            if (!empty($map['DomainItem'])) {
                $model->domainItem = [];
                $n = 0;
                foreach ($map['DomainItem'] as $item) {
                    $model->domainItem[$n++] = null !== $item ? domainItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
