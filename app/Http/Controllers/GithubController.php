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
    $hookSecret = env('GITHUB_SECRET');

    if (!isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
      abort(500, 'Secret key not supplied');
    } elseif (!extension_loaded('hash')) {
      abort(500, 'Missing \'hash\' extension');
    }

    list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');
    if (!in_array($algo, hash_algos(), TRUE)) {
      abort(500, 'Hash algorithm \'$algo\' is not supported.');
    }

    $rawPost = file_get_contents('php://input');
    if ($hash !== hash_hmac($algo, $rawPost, $hookSecret)) {
      abort(500, 'Hook secret does not match.');
    }

    //TODO perform:
    chdir('..');
    `php artisan down`;
    `git reset --hard`;
    `git pull origin master`;
    //`composer install`;
    //`npm install`;
    //`php artisan migrate`;
    `php artisan up`;
    return `pwd`;
  }

}
