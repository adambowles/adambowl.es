<?php namespace App\Http\Controllers;

class GitController extends Controller {
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
  | Note: currently untested, this is effectively pseudocode
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
  public function update(Request $request)
  {
    if(sha1(config('GitHubSecret')) == $request->input('X-Hub-Signature')) {
      //TODO perform:
      //`php artisan down`
      //`git pull`
      //`composer install`
      //`npm install`
      //`php artisan migrate`
      //`php artisan up`
      abort(200); // success
    } else {
      abort(500, 'Secret key does not match'); // error
    }
  }

}
