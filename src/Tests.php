<?php namespace Outdare\Bugsnag;
use Log;
class Tests {

  public function callClient()
  {
    //577b7938e694aa6f05084d95
    //577b7938e694aa6f05084d98

    $client = new Client([
      'auth_type' => 'user',
      'user' => 'francisco.soares@etnos.co',
      'pass' => 'gthyjuFRki!337'
    ]);

    // $account = new Account($client);
    // $response = $account->all();
    // Log::info($response);
    //
    // $response = $account->current();
    // Log::info($response);
    //
    // $response = $account->get('577b7938e694aa6f05084d98');
    // Log::info($response);

    $project = new Project($client);
    // $response = $project->byAccount('577b7938e694aa6f05084d95');
    // Log::info($response);
    //
    // $response = $project->getDetails('58205fffbbddbd5005915c1b');
    // Log::info($response);

    // $response = $project->create('577b7938e694aa6f05084d95',"outdare bot test","laravel");
    // Log::info($response);

    // $response = $project->update('5825b594f1f70e5bf14a4c92','outdare bot test updated',"laravel");
    // Log::info($response);

    // $project->delete('5825b594f1f70e5bf14a4c92');
    // $response = $project->getDetails('5825b594f1f70e5bf14a4c92');
    // Log::info($response);

  }
}
