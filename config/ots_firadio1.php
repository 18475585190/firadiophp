<?php

$schema = 'http'; // URL协议
$InstanceName = 'firadio1'; // 实例名
$region = 'cn-hangzhou'; // 地域
$ots_domain = 'ots.aliyuncs.com'; // OTS域名
$EndPoint = $schema . '://' . $InstanceName . '.' . $region . '.' . $ots_domain;
return array(
    'class' => '\FiradioPHP\Api\Aliyun\OTS',
    'config' => array(
        'EndPoint' => $EndPoint, // 挂载点
        'AccessKeyID' => 'LTAIFbrH56tJaO6m',
        'AccessKeySecret' => 'zI3OrWXG99z2Xagx6b6WeRGr3gpm5T',
        'InstanceName' => $InstanceName
    )
);
