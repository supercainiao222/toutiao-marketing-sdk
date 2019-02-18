<?php
/**
 * 获取广告组
 * User: zhangwenzong
 * Date: 2019/2/12
 * Time: 16:58
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$req = $client::AdvertisingDelivery()->campaignGet()->setAdvertiserId(ADVERTISER_ID)->send();
var_dump($req->getBody());


