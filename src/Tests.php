<?php namespace Outdare\Confluence;
use Log;
class Tests {

  public function callClient()
  {
    Log::info("Creating Space");
    $client = new Client([
      'hostname' => 'etdare.atlassian.net',
      'user' => 'admin',
      'pass' => 'Coentros1'
    ]);

    // $space = new Space($client);
    // $response = $space->create("TEST-BOT","Space Test for bot","global","New space test created by outdare bot");
    // $response = $space->all();
    //
    $page = new Page($client);
    // $response = $page->create("DEVOPS","Pagina de teste [OUTDAREBOT]","<p>Pagina automaticamente criada pelo bot outdare</p>");
    //11567111
    // $response = $page->createChild("DEVOPS",'11567111',"Test child","Uma child criada pelo outdare bot");
    // $response = $page->delete("11567112");
    $response = $page->search("Pagina updated", "DEVOPS");
    Log::info($response);
  }
}
