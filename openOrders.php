<?php
$base = "https://api.btcturk.com";
$apiKey = "b06718fd-2a28-4a01-91a6-5d7d55b1fd27";
$apiSecret = "MZPmkKNmzELKwfLr3JA3+byDibf1fq1g";
$method = "/api/v1/openOrders?pairSymbol=BTC_TRY";
$uri = $base.$method;

$nonce = time()*1000;
$message = $apiKey.$nonce;
$signatureBytes = hash_hmac("sha256", $message, base64_decode($apiSecret), true);
$signature = base64_encode($signatureBytes);
$headers = array(
    "X-PCK: ".$apiKey,
    "X-Stamp: ".$nonce,
    "X-Signature: ".$signature,
    "Cache-Control: no-cache",
    "Content-Type: application/json");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_HTTP_VERSION, "CURL_HTTP_VERSION_1_2");
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);

if (curl_errno($ch)) {
    print_r(curl_error($ch));
}
$answer = json_decode($result);
print_r($answer);
