<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $User = Auth::user();
            if (Auth::user()->can($request->route()->getName())) {
                return $next($request);
            } else {
                return redirect()->route('dashboard')->with('error','You do not have the necessary permissions to perform this action.');
            }
        }
        return $next($request);
    }
}
