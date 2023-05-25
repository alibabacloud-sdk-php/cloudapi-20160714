<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps;

use AlibabaCloud\Tea\Model;

class authorizedApp extends Model
{
    /**
     * @example 2386789
     *
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @example 2018-10-05T16:00:00Z
     *
     * @var string
     */
    public $authVaildTime;

    /**
     * @example CONSOLE
     *
     * @var string
     */
    public $authorizationSource;

    /**
     * @example 2016-07-21T06:17:20Z
     *
     * @var string
     */
    public $authorizedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example PROVIDER
     *
     * @var string
     */
    public $operator;

    /**
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'authVaildTime'       => 'AuthVaildTime',
        'authorizationSource' => 'AuthorizationSource',
        'authorizedTime'      => 'AuthorizedTime',
        'description'         => 'Description',
        'operator'            => 'Operator',
        'stageName'           => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
        }
        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }
        if (null !== $this->authorizedTime) {
            $res['AuthorizedTime'] = $this->authorizedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedApp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
        }
        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }
        if (isset($map['AuthorizedTime'])) {
            $model->authorizedTime = $map['AuthorizedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
