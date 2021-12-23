<?php
/**
 * BTC API CLASS
 */

class BTCTURK
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
public function test()
{
  // code...
}

}
