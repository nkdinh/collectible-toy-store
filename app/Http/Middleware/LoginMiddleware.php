<?php

namespace App\Http\Middleware;

use App\Repository\UserAuth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln(UserAuth::class);

        if (!Session::has('username')) {
            $out->writeln('unauthenticated');
            return redirect()->route('admin.login');
        } else {
            $out->writeln('authenticated: ' . Session::get('username'));
        }
        return $next($request);
    }
}
