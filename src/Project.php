<?php namespace Outdare\Bugsnag;

class Project {

  private $client = null;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function byAccount($account_id)
  {
    $uri = "/accounts/".$account_id.'/projects';
    $response = $this->client->callGet($uri);
    return $response;
  }

  public function byUser($user_id)
  {
    $uri = "/users/".$user_id."/projects";
    $response = $this->client->callGet($uri);
    return $response;
  }

  public function getDetails($project_id)
  {
    $uri = "/projects/".$project_id;
    $response = $this->client->callGet($uri);
    return $response;
  }

  public function create($account_id,$name,$type)
  {
    $uri = "/accounts/".$account_id."/projects";
    $data = [
      'name' => $name,
      'type' => $type,
    ];
    $response = $this->client->callPost($uri,json_encode($data));
    return $response;
  }

  public function update($project_id,$name,$type)
  {
    $uri = "/projects/".$project_id;
    $data = [
      'name' => $name,
      'type' => $type,
    ];
    $response = $this->client->callPatch($uri,json_encode($data));
    return $response;
  }

  public function delete($project_id)
  {
    $uri = "/projects/".$project_id;
    $this->client->callDelete($uri);
  }

}
