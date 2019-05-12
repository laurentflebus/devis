<?php

namespace App\Http\Middleware;

use Closure;

class Auth
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
        //  si l'utilisateur n'est pas connecté
        if (auth()->guest()) {
          // Affiche un message flash (laracasts/flash)
          flash('Vous devez être connecté pour voir cette page.')->error();
          return redirect('/');
        }

        // reourne la suite de l'application
        return $next($request);
    }
}
