<?php namespace App\Http\Controllers;

class HomeController extends Controller {
  /*
  |--------------------------------------------------------------------------
  | Git Controller
  |--------------------------------------------------------------------------
  |
  | This controller allows GitHub to tell the server to update itself from
  | the master repo
  |
  | Secured via use of a secret key that will be sent via POST
  |
  */
  
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    //$this->middleware('auth');
  }
  
  /**
  * Perform a git pull and respond with success or fail
  *
  * @return void
  */
  public function update()
  {
    if(config('GitHubSecret') == '') {
      //TODO perform:
      // -git pull
      // -composer install
      // -npm install
      // -artisan migrate
      abort(200); // success
    } else {
      abort(500, 'Secret key does not match'); // error
    }
  }

}
