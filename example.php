<?php

require_once __DIR__ . '/vendor/autoload.php';

use aboodma\BtcTurk\Index ;

$private = "xxx";
$ApiKey = "xxx";
$BTC = new Index($ApiKey,$private);
echo $BTC->test();
