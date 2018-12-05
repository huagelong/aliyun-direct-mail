<?php
require_once __DIR__ . "/../vendor/autoload.php";

$region = "cn-hangzhou";
$appKey = "111";
$appSecret = "2222";
$accountName = "service@mail.2tag.cn";
$accountAlias = "service";

$obj = new \Trensy\DirectMail\Mail($region, $appKey, $appSecret, $accountName, $accountAlias);
$obj->send("trensy@qq.com", "hello world", "hello world");
