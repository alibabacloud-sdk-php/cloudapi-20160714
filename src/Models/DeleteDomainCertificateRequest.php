<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteDomainCertificateRequest extends Model
{
    /**
     * @description The ID of the SSL certificate that you want to delete. The ID is automatically generated by the system and globally unique.
     *
     * This parameter is required.
     *
     * @example c621720d1eb34843822b7fb5148e6926
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The custom domain name.
     *
     * This parameter is required.
     *
     * @example api.demo.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the API group. This ID is generated by the system and globally unique.
     *
     * This parameter is required.
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
    protected $_name = [
        'certificateId' => 'CertificateId',
        'domainName' => 'DomainName',
        'groupId' => 'GroupId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
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
     * @return DeleteDomainCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
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
