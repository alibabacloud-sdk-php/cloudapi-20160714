<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResponseBody extends Model
{
    /**
     * @description The second-level domain name that is automatically assigned to the API group.
     *
     * @example xxx
     *
     * @var string
     */
    public $certificateBody;

    /**
     * @description The status of the domain name that uses WebSocket.
     *
     * @example 6EF60BEC-0242-43AF-BB20-270359FB54A7
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The validity status of the domain name. Valid values:
     *
     *   NORMAL
     *   ABNORMAL: This status affects API calls and must be resolved as soon as possible.
     *
     * @example myCertificate
     *
     * @var string
     */
    public $certificateName;

    /**
     * @description The custom domain name.
     *
     * @example xxx
     *
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @var int
     */
    public $certificateValidEnd;

    /**
     * @var int
     */
    public $certificateValidStart;

    /**
     * @description Remarks about the domain name, such as the cause of an exception.
     *
     * @example BINDING
     *
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @description *   This operation is intended for API providers.
     *
     * @example RESOLVED
     *
     * @var string
     */
    public $domainCNAMEStatus;

    /**
     * @description The ID of the API group to which the domain name is bound. This ID is generated by the system and globally unique.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @description The binding status of the custom domain name. Valid values:
     *
     *   BINDING: The domain name has been bound.
     *   BOUND: The domain name has not been bound.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The domain name does not have an ICP filing.
     *
     * @example The unique ID of the SSL certificate, which is automatically generated by the system.
     *
     * @var string
     */
    public $domainRemark;

    /**
     * @description The ID of the request.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @description The content of the certificate.
     *
     * @example 927d50c0f2e54b359919923d908bb015
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the SSL certificate.
     *
     * @example 6EF60BEC-0242-43AF-BB20-270359FB54A7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The domain name resolution status. Valid values:
     *
     *   RESOLVED: The domain name has been resolved.
     *   UNRESOLVED: The domain name has not been resolved.
     *
     * @example xxx-cn-hangzhou.alicloudapi.com
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'certificateBody'       => 'CertificateBody',
        'certificateId'         => 'CertificateId',
        'certificateName'       => 'CertificateName',
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'certificateValidEnd'   => 'CertificateValidEnd',
        'certificateValidStart' => 'CertificateValidStart',
        'domainBindingStatus'   => 'DomainBindingStatus',
        'domainCNAMEStatus'     => 'DomainCNAMEStatus',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'domainName'            => 'DomainName',
        'domainRemark'          => 'DomainRemark',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'groupId'               => 'GroupId',
        'requestId'             => 'RequestId',
        'subDomain'             => 'SubDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }
        if (null !== $this->certificateValidEnd) {
            $res['CertificateValidEnd'] = $this->certificateValidEnd;
        }
        if (null !== $this->certificateValidStart) {
            $res['CertificateValidStart'] = $this->certificateValidStart;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->domainCNAMEStatus) {
            $res['DomainCNAMEStatus'] = $this->domainCNAMEStatus;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }
        if (isset($map['CertificateValidEnd'])) {
            $model->certificateValidEnd = $map['CertificateValidEnd'];
        }
        if (isset($map['CertificateValidStart'])) {
            $model->certificateValidStart = $map['CertificateValidStart'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['DomainCNAMEStatus'])) {
            $model->domainCNAMEStatus = $map['DomainCNAMEStatus'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
