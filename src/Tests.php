<?php namespace Outdare\Confluence;
use Log;
class Tests {

  public function callClient()
  {
    $client = new Client([
      'user' => 'admin',
      'pass' => 'Coentros1'
    ]);

    $project = new Project($client);
    $project->create('account_id','OutdareBot','laravel');
  }
}
