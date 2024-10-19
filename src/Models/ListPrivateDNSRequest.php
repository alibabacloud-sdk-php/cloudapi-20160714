<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateDNSRequest extends Model
{
    /**
     * @example api.demo.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example A
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'intranetDomain' => 'IntranetDomain',
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
     * @return ListPrivateDNSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
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