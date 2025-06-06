<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas;

class DescribePluginSchemasResponseBody extends Model
{
    /**
     * @var pluginSchemas
     */
    public $pluginSchemas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pluginSchemas' => 'PluginSchemas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pluginSchemas) {
            $this->pluginSchemas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pluginSchemas) {
            $res['PluginSchemas'] = null !== $this->pluginSchemas ? $this->pluginSchemas->toArray($noStream) : $this->pluginSchemas;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PluginSchemas'])) {
            $model->pluginSchemas = pluginSchemas::fromMap($map['PluginSchemas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
