<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrivateDNSShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $recordsShrink;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description This parameter is required.
     *
     * @example A
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'intranetDomain' => 'IntranetDomain',
        'recordsShrink'  => 'Records',
        'securityToken'  => 'SecurityToken',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->recordsShrink) {
            $res['Records'] = $this->recordsShrink;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateDNSShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['Records'])) {
            $model->recordsShrink = $map['Records'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}