<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * oss回源鉴权
 *
 * @method string getSwitch() 获取oss回源鉴权配置开关，取值有：
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置oss回源鉴权配置开关，取值有：
on：开启
off：关闭
 * @method string getAccessKey() 获取访问ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置访问ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取密钥，字段为脱敏返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置密钥，字段为脱敏返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取Bucketname
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置Bucketname
注意：此字段可能返回 null，表示取不到有效值。
 */
class OssPrivateAccess extends AbstractModel
{
    /**
     * @var string oss回源鉴权配置开关，取值有：
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var string 访问ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var string 密钥，字段为脱敏返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string Bucketname
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @param string $Switch oss回源鉴权配置开关，取值有：
on：开启
off：关闭
     * @param string $AccessKey 访问ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey 密钥，字段为脱敏返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket Bucketname
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }
    }
}
