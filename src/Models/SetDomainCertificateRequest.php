<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainCertificateRequest extends Model
{
    /**
     * @description The content of the CA certificate.
     *
     * @example Content of the CA certificate
     *
     * @var string
     */
    public $caCertificateBody;

    /**
     * @description The certificate content.
     *
     * @example For more information, see the following request examples
     *
     * @var string
     */
    public $certificateBody;

    /**
     * @description The name of the SSL certificate.
     *
     * @example test_cert
     *
     * @var string
     */
    public $certificateName;

    /**
     * @description The private key of the SSL certificate.
     *
     * @example For more information, see the following request examples
     *
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @description The custom domain name.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the API group to which the domain name is bound. This ID is generated by the system and globally unique.
     *
     * @example 927d50c0f2e54b359919923d908bb015
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The certificate verification depth.
     *
     * @example 2
     *
     * @var string
     */
    public $sslVerifyDepth;
    protected $_name = [
        'caCertificateBody'     => 'CaCertificateBody',
        'certificateBody'       => 'CertificateBody',
        'certificateName'       => 'CertificateName',
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'domainName'            => 'DomainName',
        'groupId'               => 'GroupId',
        'securityToken'         => 'SecurityToken',
        'sslVerifyDepth'        => 'SslVerifyDepth',
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
        if (null !== $this->sslVerifyDepth) {
            $res['SslVerifyDepth'] = $this->sslVerifyDepth;
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
        if (isset($map['SslVerifyDepth'])) {
            $model->sslVerifyDepth = $map['SslVerifyDepth'];
        }

        return $model;
    }
}
