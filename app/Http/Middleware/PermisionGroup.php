<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermisionGroup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

        if ($request->user()->group == 1) {
            return $next($request);
        }
        if ($request->user()->group == 2 && ($role == 'staff' || 'admin')) {
            return $next($request);
        }

        if ($request->user()->group == 3 && $role == 'petugas') {
            return $next($request);
        }

        return response()->view("permision-denied");


    }
}
