<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\customSystemParameters;

use AlibabaCloud\Tea\Model;

class customSystemParameter extends Model
{
    /**
     * @description The ID of the region where the EventBridge instance is located.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description The effective version.
     *
     * @example If **AuthType** is set to **APP**, this value must be passed to specify the signature algorithm. If you do not specify a value, HmacSHA256 is used by default. Valid values:
     *
     *   HmacSHA256
     *   HmacSHA1,HmacSHA256
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example HEAD
     *
     * @var string
     */
    public $location;

    /**
     * @description The default value.
     *
     * @example CaClientIp
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description Client IP Address
     *
     * @example clientIp
     *
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'demoValue'            => 'DemoValue',
        'description'          => 'Description',
        'location'             => 'Location',
        'parameterName'        => 'ParameterName',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSystemParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
