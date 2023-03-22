<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard = null)
    {
        /*
            switch (auth()->user()->role_id) {
                case 1:
                    return ('/home');

                case 2:
                    return ('/admin/home');

                default:
                    auth()->logout();
                    return route('login');

            }
        */
        // If a user is authenticated
        if(Auth::user() != null)
        {
            if(Auth::user()->role_id == 1){
                return redirect('/home');
            }
            elseif(Auth::user()->role_id == 2){
                return redirect('/admin/home');
            }else{
                return redirect('/');
            }
        }
        return $next($request);
    }
}
