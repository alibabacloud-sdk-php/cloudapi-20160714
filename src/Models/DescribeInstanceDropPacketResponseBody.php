<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropPacketResponseBody\instanceDropPacket;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDropPacketResponseBody extends Model
{
    /**
     * @description The list of dropped packets in the instance.
     *
     * @var instanceDropPacket
     */
    public $instanceDropPacket;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ001
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceDropPacket' => 'InstanceDropPacket',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDropPacket) {
            $res['InstanceDropPacket'] = null !== $this->instanceDropPacket ? $this->instanceDropPacket->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDropPacketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDropPacket'])) {
            $model->instanceDropPacket = instanceDropPacket::fromMap($map['InstanceDropPacket']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}