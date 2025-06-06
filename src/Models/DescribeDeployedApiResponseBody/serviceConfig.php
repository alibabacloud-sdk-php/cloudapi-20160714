<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\vpcConfig;

class serviceConfig extends Model
{
    /**
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var mockHeaders
     */
    public $mockHeaders;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var int
     */
    public $mockStatusCode;

    /**
     * @var string
     */
    public $serviceAddress;

    /**
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @var string
     */
    public $servicePath;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var int
     */
    public $serviceTimeout;

    /**
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'functionComputeConfig' => 'FunctionComputeConfig',
        'mock' => 'Mock',
        'mockHeaders' => 'MockHeaders',
        'mockResult' => 'MockResult',
        'mockStatusCode' => 'MockStatusCode',
        'serviceAddress' => 'ServiceAddress',
        'serviceHttpMethod' => 'ServiceHttpMethod',
        'servicePath' => 'ServicePath',
        'serviceProtocol' => 'ServiceProtocol',
        'serviceTimeout' => 'ServiceTimeout',
        'serviceVpcEnable' => 'ServiceVpcEnable',
        'vpcConfig' => 'VpcConfig',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->functionComputeConfig) {
            $this->functionComputeConfig->validate();
        }
        if (null !== $this->mockHeaders) {
            $this->mockHeaders->validate();
        }
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toArray($noStream) : $this->functionComputeConfig;
        }

        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }

        if (null !== $this->mockHeaders) {
            $res['MockHeaders'] = null !== $this->mockHeaders ? $this->mockHeaders->toArray($noStream) : $this->mockHeaders;
        }

        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }

        if (null !== $this->mockStatusCode) {
            $res['MockStatusCode'] = $this->mockStatusCode;
        }

        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }

        if (null !== $this->serviceHttpMethod) {
            $res['ServiceHttpMethod'] = $this->serviceHttpMethod;
        }

        if (null !== $this->servicePath) {
            $res['ServicePath'] = $this->servicePath;
        }

        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }

        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }

        if (null !== $this->serviceVpcEnable) {
            $res['ServiceVpcEnable'] = $this->serviceVpcEnable;
        }

        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toArray($noStream) : $this->vpcConfig;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }

        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }

        if (isset($map['MockHeaders'])) {
            $model->mockHeaders = mockHeaders::fromMap($map['MockHeaders']);
        }

        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }

        if (isset($map['MockStatusCode'])) {
            $model->mockStatusCode = $map['MockStatusCode'];
        }

        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }

        if (isset($map['ServiceHttpMethod'])) {
            $model->serviceHttpMethod = $map['ServiceHttpMethod'];
        }

        if (isset($map['ServicePath'])) {
            $model->servicePath = $map['ServicePath'];
        }

        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }

        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }

        if (isset($map['ServiceVpcEnable'])) {
            $model->serviceVpcEnable = $map['ServiceVpcEnable'];
        }

        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
