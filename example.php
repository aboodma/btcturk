<?php


require_once __DIR__ . '/vendor/autoload.php';

use Aboodma\Btcturk\BTCT ;

$private = "xxx";
$ApiKey = "xxx";
$BTC = new BTCT($ApiKey,$private);
$res =  $BTC->ticker("ENJ_TRY");
echo $res->last;
