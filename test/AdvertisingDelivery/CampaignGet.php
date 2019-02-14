<?php
/**
 * 获取广告组
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 16:58
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new \core\Profile\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = new \AdvertisingDelivery\CampaignGet();
$req->setAdvertiserId(ADVERTISER_ID);
var_dump($client->excute($req)->getBody());

