<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ResetAppCodeRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $newAppCode;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'appCode'       => 'AppCode',
        'newAppCode'    => 'NewAppCode',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->newAppCode) {
            $res['NewAppCode'] = $this->newAppCode;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAppCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['NewAppCode'])) {
            $model->newAppCode = $map['NewAppCode'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
