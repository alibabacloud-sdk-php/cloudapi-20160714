<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\customDomains;

use AlibabaCloud\Tea\Model;

class domainItem extends Model
{
    /**
     * @description The alias of the associated environment.
     *
     * @example TEST1
     *
     * @var string
     */
    public $bindStageAlias;

    /**
     * @description The environment in which the associated API group runs.
     *
     * @example TEST
     *
     * @var string
     */
    public $bindStageName;

    /**
     * @description The SSL certificate ID, which is automatically generated by the system.
     *
     * @example 6EF60BEC-0242-43AF-BB20-270359FB54A7
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The name of the SSL certificate.
     *
     * @example myCertificate
     *
     * @var string
     */
    public $certificateName;

    /**
     * @description The time when the certificate expires.
     *
     * @example 2635123476000
     *
     * @var int
     */
    public $certificateValidEnd;

    /**
     * @description The time when the certificate takes effect.
     *
     * @example 1689043476000
     *
     * @var int
     */
    public $certificateValidStart;

    /**
     * @description The type of the custom domain name.
     *
     * @example intranet
     *
     * @var string
     */
    public $customDomainType;

    /**
     * @description The binding status of the custom domain name. Valid values:
     *
     *   **BINDING**: The domain name is bound.
     *   **BOUND**: The domain name is not bound.
     *
     * @example BINDING
     *
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @description The domain name resolution status. Valid values:
     *
     *   **RESOLVED**
     *   **UNRESOLVED**
     *
     * @example RESOLVED
     *
     * @var string
     */
    public $domainCNAMEStatus;

    /**
     * @description The validity status of the domain name. Valid values:
     *
     *   **NORMAL**: The domain name is valid.
     *   **ABNORMAL**: The domain name is invalid. This status affects API calls and needs to be rectified as soon as possible.
     *
     * @example ABNORMAL
     *
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @description The domain name.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Remarks about the domain name, such as the cause of an exception.
     *
     * @example Indicates that the domain name does not have an ICP filing.
     *
     * @var string
     */
    public $domainRemark;

    /**
     * @description The status of the domain that uses the WebSocket feature.
     *
     * @example CLOSE
     *
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @description Indicates whether to redirect HTTP requests to HTTPS.
     *
     * @example false
     *
     * @var bool
     */
    public $isHttpRedirectToHttps;

    /**
     * @description The wildcard domain name mode.
     *
     * @example [\\"{test}.test.com\\"]
     *
     * @var string
     */
    public $wildcardDomainPatterns;
    protected $_name = [
        'bindStageAlias' => 'BindStageAlias',
        'bindStageName' => 'BindStageName',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'certificateValidEnd' => 'CertificateValidEnd',
        'certificateValidStart' => 'CertificateValidStart',
        'customDomainType' => 'CustomDomainType',
        'domainBindingStatus' => 'DomainBindingStatus',
        'domainCNAMEStatus' => 'DomainCNAMEStatus',
        'domainLegalStatus' => 'DomainLegalStatus',
        'domainName' => 'DomainName',
        'domainRemark' => 'DomainRemark',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'isHttpRedirectToHttps' => 'IsHttpRedirectToHttps',
        'wildcardDomainPatterns' => 'WildcardDomainPatterns',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStageAlias) {
            $res['BindStageAlias'] = $this->bindStageAlias;
        }
        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->certificateValidEnd) {
            $res['CertificateValidEnd'] = $this->certificateValidEnd;
        }
        if (null !== $this->certificateValidStart) {
            $res['CertificateValidStart'] = $this->certificateValidStart;
        }
        if (null !== $this->customDomainType) {
            $res['CustomDomainType'] = $this->customDomainType;
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
        if (null !== $this->isHttpRedirectToHttps) {
            $res['IsHttpRedirectToHttps'] = $this->isHttpRedirectToHttps;
        }
        if (null !== $this->wildcardDomainPatterns) {
            $res['WildcardDomainPatterns'] = $this->wildcardDomainPatterns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStageAlias'])) {
            $model->bindStageAlias = $map['BindStageAlias'];
        }
        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CertificateValidEnd'])) {
            $model->certificateValidEnd = $map['CertificateValidEnd'];
        }
        if (isset($map['CertificateValidStart'])) {
            $model->certificateValidStart = $map['CertificateValidStart'];
        }
        if (isset($map['CustomDomainType'])) {
            $model->customDomainType = $map['CustomDomainType'];
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
        if (isset($map['IsHttpRedirectToHttps'])) {
            $model->isHttpRedirectToHttps = $map['IsHttpRedirectToHttps'];
        }
        if (isset($map['WildcardDomainPatterns'])) {
            $model->wildcardDomainPatterns = $map['WildcardDomainPatterns'];
        }

        return $model;
    }
}
