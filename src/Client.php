<?php namespace Outdare\Bugsnag;
use Log;
class Client {

  private $host = 'api.bugsnag.com';

  private $user = null;
  private $pass = null;
  private $auth_type = null;
  private $token = null;

  public function __construct($params)
  {
    if($params['auth_type'] == 'user')
    {
      $this->user = $params['user'];
      $this->pass = $params['pass'];
      $this->auth_type = 'user';
    }else if($params['auth_type'] == 'token')
    {
      $this->auth_type = 'token';
      $this->token = $params['token'];
    }
  }

  public function callGet($path)
  {
    $uri = "https://".$this->host."".$path;

    $call = \Httpful\Request::get($uri)
    ->addHeader('User-Agent','Outdare Integration')
    ->expectsJson();

    if($this->auth_type == 'user')
    {
      $call->authenticateWith($this->user, $this->pass);
    }else if($this->auth_type == 'token')
    {
      $call->addHeader('Authorization','token '.$this->token);
    }

    $response = $call->send();

    return $response;
  }

  public function callPost($path,$jsonString)
  {
    $uri = "https://".$this->host."".$path;

    $call = \Httpful\Request::post($uri)
    ->sendsJson()
    ->addHeader('User-Agent','Outdare Integration')
    ->expectsJson()
    ->body($jsonString);

    if($this->auth_type == 'user')
    {
      $call->authenticateWith($this->user, $this->pass);
    }else if($this->auth_type == 'token')
    {
      $call->addHeader('Authorization','token '.$this->token);
    }

    $response = $call->send();

    return $response;
  }

  public function callPatch($path,$jsonString)
  {
    $uri = "https://".$this->host."".$path;

    $call = \Httpful\Request::patch($uri)
    ->sendsJson()
    ->addHeader('User-Agent','Outdare Integration')
    ->expectsJson()
    ->body($jsonString);

    if($this->auth_type == 'user')
    {
      $call->authenticateWith($this->user, $this->pass);
    }else if($this->auth_type == 'token')
    {
      $call->addHeader('Authorization','token '.$this->token);
    }

    $response = $call->send();

    return $response;
  }

  public function callPut($path,$jsonString)
  {
    $uri = "https://".$this->host."".$path;

    $call = \Httpful\Request::put($uri)
    ->sendsJson()
    ->addHeader('User-Agent','Outdare Integration')
    ->expectsJson()
    ->body($jsonString);

    if($this->auth_type == 'user')
    {
      $call->authenticateWith($this->user, $this->pass);
    }else if($this->auth_type == 'token')
    {
      $call->addHeader('Authorization','token '.$this->token);
    }

    $response = $call->send();

    return $response;
  }

  public function callDelete($path)
  {
    $uri = "https://".$this->host."".$path;

    $call = \Httpful\Request::delete($uri)
    ->addHeader('User-Agent','Outdare Integration');

    if($this->auth_type == 'user')
    {
      $call->authenticateWith($this->user, $this->pass);
    }else if($this->auth_type == 'token')
    {
      $call->addHeader('Authorization','token '.$this->token);
    }

    $response = $call->send();

    return $response;
  }

}
