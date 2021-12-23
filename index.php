<?php
include 'autoload.php';
$apiKey = "b06718fd-2a28-4a01-91a6-5d7d55b1fd27";
$apiSecret = "MZPmkKNmzELKwfLr3JA3+byDibf1fq1g";
$BT = new BTCTURK($apiKey,$apiSecret);
echo $BT->test();


// $method = "/api/v1/users/balances";
