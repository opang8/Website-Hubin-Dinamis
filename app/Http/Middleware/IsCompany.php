<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsCompany
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
        if(Auth::user() &&  Auth::user()->roles == 'PERUSAHAAN'){
            return $next($request);
        }
        return redirect('/'); //jika yang dimasukkan bukan admin
    }
}
