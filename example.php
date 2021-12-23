<?php


require_once __DIR__ . '/vendor/autoload.php';

use Aboodma\Btcturk\Index ;

$private = "xxx";
$ApiKey = "xxx";
$BTC = new Index($ApiKey,$private);
echo $BTC->test();
