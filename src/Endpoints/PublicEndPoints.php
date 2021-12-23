<?php
namespace aboodma\BtcTurk\Endpoints;
use GuzzleHttp\Client;
class PublicEndPoints
{
    public $baseURI = "https://api.btcturk.com";
    public function ticker(String $pairSymbol)
    {

        $EndPoint = $this->baseURI."/api/v2/ticker";
        $query = ['query'=>['pairSymbol'=>$pairSymbol]];
        $client = new Client();
        $response = $client->get($EndPoint,$query);
        return $response;

    }
}
