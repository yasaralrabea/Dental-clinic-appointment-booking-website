<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckPassword
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('admin_logged_in')) {
            return redirect('/login');
        }

        return $next($request);
    }
}
