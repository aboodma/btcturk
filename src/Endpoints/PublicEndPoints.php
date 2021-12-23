<?php
namespace aboodma\BtcTurk\Endpoints;
use GuzzleHttp\Client;
class PublicEndPoints
{
    public $baseURI = "https://api.btcturk.com";
    public function ticker(String $pairSymbol)
    {

        $EndPoint = "/api/v2/ticker";
        $query = ['query'=>['pairSymbol'=>$pairSymbol]];
        $client = new Client();
        $response = $client->get($this->baseURI,$query);
        return $response;

    }
}
