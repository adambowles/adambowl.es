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
  public function pull()
  {
    dd('hello');
    $suppliedKey = $_SERVER['HTTP_X_HUB_SIGNATURE'];
    $localKey = sha1(config('GITHUB_SECRET'));

    if(!isset($suppliedKey)) {
      abort(500, 'Secret key not supplied');
    }

    if(hash_equals($localKey, $suppliedKey)) {
      //TODO perform:
      //`cd ../`
      //`php artisan down`
      //`git reset --hard`
      //`git pull`
      //`composer install`
      //`npm install`
      //`php artisan migrate`
      //`php artisan up`
    } else {
      abort(500, 'Secret key does not match');
    }
  }

}
