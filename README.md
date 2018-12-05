# aliyun-direct-mail

阿里云邮件推送

使用方法

1、composer install

```shell

composer require trensy/aliyun-direct-mail

```

2、使用

```php
$region = "cn-hangzhou";
$appKey = "xxxx";
$appSecret = "xxxxx";
$accountName = "service@mail.xxx.com";
$accountAlias = "service";

$obj = new \Trensy\DirectMail\Mail($region, $appKey, $appSecret, $accountName, $accountAlias);
$obj->send("trensy@uu.com", "hello world", "hello world");

```
