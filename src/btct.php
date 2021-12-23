<?php

namespace aboodma\BtcTurk;
use Aboodma\Btcturk\Endpoints\PublicEndPoints;
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
    $PublicEndPoints = new PublicEndPoints();
    return $PublicEndPoints->ticker($pair);
  }

}
