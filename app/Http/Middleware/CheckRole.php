<?php

namespace BetterLife\Http\Middleware;

use Closure;
use BetterLife\Http\Middleware\Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->role=='user')
        {
          return redirect('home');
          // return abort(403, 'No tienes autorización para ingresar.');

        }

        return $next($request);
    }
}
