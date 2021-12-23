<?php

require_once __DIR__ . '/vendor/autoload.php';

use aboodma\BtcTurk\BTCTURK;

$private = "xxx";
$ApiKey = "xxx";
$BTC = new BtcTurk($ApiKey,$private);
echo $BTC->test();
