<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $caCertificateBody;

    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'caCertificateBody'     => 'CaCertificateBody',
        'certificateBody'       => 'CertificateBody',
        'certificateName'       => 'CertificateName',
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'domainName'            => 'DomainName',
        'groupId'               => 'GroupId',
        'securityToken'         => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertificateBody) {
            $res['CaCertificateBody'] = $this->caCertificateBody;
        }
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCertificateBody'])) {
            $model->caCertificateBody = $map['CaCertificateBody'];
        }
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
