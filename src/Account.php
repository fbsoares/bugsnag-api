<?php namespace Outdare\Bugsnag;

class Account {

  private $client = null;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function all()
  {
    $uri = "/accounts";
    $response = $this->client->callGet($uri);
    return $response;
  }

  public function current()
  {
    $uri = "/account";
    $response = $this->client->callGet($uri);
    return $response;
  }

  public function get($account_id)
  {
    $uri = "/account/".$account_id;
    $response = $this->client->callGet($uri);
    return $response;
  }
}
