<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\eventBridgeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\mockConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\ossConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class backendConfig extends Model
{
    /**
     * @description The information about the backend service that is EventBridge.
     *
     * @var eventBridgeConfig
     */
    public $eventBridgeConfig;

    /**
     * @description The information about the backend service whose type is FC_EVENT or FC_HTTP.
     *
     * @var functionComputeConfig
     */
    public $functionComputeConfig;

    /**
     * @var mockConfig
     */
    public $mockConfig;

    /**
     * @description The information about the backend service whose type is OSS.
     *
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @description The URL of the backend service.
     *
     * @example 10.0.0.1
     *
     * @var string
     */
    public $serviceAddress;

    /**
     * @description The type of the backend service.
     *
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @description The information about the virtual private cloud (VPC). This parameter is available only for backend services whose type is VPC.
     *
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'eventBridgeConfig'     => 'EventBridgeConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'mockConfig'            => 'MockConfig',
        'ossConfig'             => 'OssConfig',
        'serviceAddress'        => 'ServiceAddress',
        'type'                  => 'Type',
        'vpcConfig'             => 'VpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBridgeConfig) {
            $res['EventBridgeConfig'] = null !== $this->eventBridgeConfig ? $this->eventBridgeConfig->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
        }
        if (null !== $this->mockConfig) {
            $res['MockConfig'] = null !== $this->mockConfig ? $this->mockConfig->toMap() : null;
        }
        if (null !== $this->ossConfig) {
            $res['OssConfig'] = null !== $this->ossConfig ? $this->ossConfig->toMap() : null;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBridgeConfig'])) {
            $model->eventBridgeConfig = eventBridgeConfig::fromMap($map['EventBridgeConfig']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }
        if (isset($map['MockConfig'])) {
            $model->mockConfig = mockConfig::fromMap($map['MockConfig']);
        }
        if (isset($map['OssConfig'])) {
            $model->ossConfig = ossConfig::fromMap($map['OssConfig']);
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }

        return $model;
    }
}
