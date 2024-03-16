<?php

require_once __DIR__ . '/../src/Tecmz.php';

// 请填写你的appId、appSecret、templateId
$appId = '*****';
$appSecret = '*****';
$templateId = '*****';

$api = \TecmzApi\Tecmz::instance($appId, $appSecret);
$ret = $api->smsSend(
    '15000000000',
    $templateId,
    [
        'code' => '123456'
    ]
);
if ($ret['code'] === 0) {
    // 发送成功
    echo '发送成功';
} else {
    // 发送失败
    echo '发送失败 ' . $ret['msg'];
}
print_r($ret);
