<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateSignatureRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signatureKey;

    /**
     * @var string
     */
    public $signatureName;

    /**
     * @var string
     */
    public $signatureSecret;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'signatureKey'    => 'SignatureKey',
        'signatureName'   => 'SignatureName',
        'signatureSecret' => 'SignatureSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->signatureSecret) {
            $res['SignatureSecret'] = $this->signatureSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['SignatureSecret'])) {
            $model->signatureSecret = $map['SignatureSecret'];
        }

        return $model;
    }
}
