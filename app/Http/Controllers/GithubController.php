<?php namespace App\Http\Controllers;

class GithubController extends Controller {
  /*
  |--------------------------------------------------------------------------
  | Home Controller
  |--------------------------------------------------------------------------
  |
  | This controller renders your application's "dashboard" for users that
  | are authenticated. Of course, you are free to change or remove the
  | controller as you wish. It is just here to get your app started!
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
  * Show the application dashboard to the user.
  *
  * @return Response
  */
  public function pull()
  {
    // dd('hello');
    // $suppliedKey = $_SERVER['HTTP_X_HUB_SIGNATURE'];
    dd($_SERVER);
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
