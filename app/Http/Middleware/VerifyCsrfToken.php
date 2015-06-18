<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

//add an array of Routes to skip CSRF check
private $openRoutes = ['github_pull'];

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    //allow whitelisted routes to skip verification
    foreach($this->openRoutes as $route) {
      if ($request->is($route)) {
        return $next($request);
      }
    }

    //all other routes require verification
    return parent::handle($request, $next);
  }

}
