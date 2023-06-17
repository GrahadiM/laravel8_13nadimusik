<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Language;
use App\Models;

class SetLangMiddleware
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
        if ($request->session()->has('lang')) {
            app()->setLocale($request->session()->get('lang'));
        }

        return $next($request);
     }
}
