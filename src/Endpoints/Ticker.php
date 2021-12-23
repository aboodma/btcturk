<?php
namespace aboodma\BtcTurk\Endpoints;
use GuzzleHttp\Client;
class Ticker
{
    protected $baseURI = "https://api.btcturk.com";
    public $pair , $pairNormalized , $denominatorSymbol,$numeratorSymbol;
    public $timestamp,$order ;
    public $last,$high,$low,$bid,$ask,$open,$volume,$average,$daily,$dailyPercent;
    
    public function __construct(String $pairSymbol)
    {

        $EndPoint = $this->baseURI."/api/v2/ticker";
        $query = ['query'=>['pairSymbol'=>$pairSymbol]];
        $client = new Client();
        $response = $client->get($EndPoint,$query);
        $body = $response->getBody();
        $body = json_decode($body,true);
        $data = $body['data'][0];
        $pair = (String)$body['data'][0]['pair'];
        $pairNormalized = (String)$body['data'][0]['pairNormalized'];
        $timestamp = (Int)$body['data'][0]['timestamp'];
        $last = (Float)$body['data'][0]['last'];
        $high = (Float)$body['data'][0]['high'];
        $low = (Float)$body['data'][0]['low'];
        $bid = (Float)$body['data'][0]['bid'];
        $ask = (Float)$body['data'][0]['ask'];
        $open = (Float)$body['data'][0]['open'];
        $volume = (Float)$body['data'][0]['volume'];
        $average = (Float)$body['data'][0]['average'];
        $daily = (Float)$body['data'][0]['daily'];
        $dailyPercent = (Float)$body['data'][0]['dailyPercent'];
        $denominatorSymbol = (String)$body['data'][0]['denominatorSymbol'];
        $numeratorSymbol = (String)$body['data'][0]['numeratorSymbol'];
        $order = (Int)$body['data'][0]['order'];
        // Store Res Into Probs to Access by object
        $this->pair = $pair;
        $this->pairNormalized = $pairNormalized;
        $this->timestamp = $timestamp;
        $this->last = $last;
        $this->high = $high;
        $this->low = $low;
        $this->bid = $bid;
        $this->ask = $ask;
        $this->open = $open;
        $this->volume = $volume;
        $this->average = $average;
        $this->daily = $daily;
        $this->dailyPercent = $dailyPercent;
        $this->denominatorSymbol = $denominatorSymbol;
        $this->numeratorSymbol = $numeratorSymbol;
        $this->order = $order;
        

    }
}
