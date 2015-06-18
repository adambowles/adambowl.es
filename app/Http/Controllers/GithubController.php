<?php namespace App\Http\Controllers;

class GithubController extends Controller {
  /*
  |--------------------------------------------------------------------------
  | Github Controller
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
    //
  }

  /**
  * Perform a git pull and respond with success or fail
  *
  * @return Response
  */
  public function pull()
  {
    // if(!isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
    if(!isset($_SERVER['HTTP_TEST'])) {
      abort(500, 'Secret key not supplied');
    }

    // $suppliedKey = $_SERVER['HTTP_X_HUB_SIGNATURE'];
    $suppliedKey = $_SERVER['HTTP_TEST'];
    $localKey = "sha1=" . env('GITHUB_SECRET');

    // if(hash_equals($localKey, $suppliedKey)) {
    if($localKey == $suppliedKey) {
      //TODO perform:
      chdir('..');
      `php artisan down`;
      `git reset --hard`;
      `git pull origin master`;
      //`composer install`;
      //`npm install`;
      //`php artisan migrate`;
      `php artisan up`;
      return `success`;
    } else {
      abort(500, 'Secret key does not match');
    }
  }

}
