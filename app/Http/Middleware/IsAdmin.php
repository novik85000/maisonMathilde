<?php

namespace App\Http\Middleware;

use App\Models\Contact;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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


        if (Auth::user() &&  Auth::user()->isAdmin == 1) {
            return $next($request);
        }

        return redirect('home')->with('error','You have not admin access');
    }
}
