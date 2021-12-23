<?php
namespace aboodma\BtcTurk;
use Aboodma\Btcturk\Endpoints\Ticker;
class BTCT
{
  protected  $ApiKey , $PrivateKey;
  protected  $BaseURI = "https://api.btcturk.com";
  function __construct(String $_ApiKey,String $_PrivateKey)
  {
  $this->ApiKey = $_ApiKey;
  $this->PrivateKey = $_PrivateKey;
  }

  private function GetPrivateKey(){
    return $this->PrivateKey;
  }

  private function GetApiKey(){
    return $this->ApiKey;
  }

  public function ticker(String $pair)
  {
    //BTC_TRY
    $PublicEndPoints = new Ticker($pair);
    return $PublicEndPoints;
  }

}
