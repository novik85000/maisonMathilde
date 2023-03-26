<?php

namespace App\Http\Middleware;

use App\Models\Contact;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){
        // Notify about new message
        $contact = new Contact;
        $howManyMessages = (count($contact-> where('isRead', '=', false)-> get()));

        session(['howManyMessages'=> $howManyMessages]);

        $locale = session('locale');
        App::setlocale($locale);
        return $next($request);
    }
}
