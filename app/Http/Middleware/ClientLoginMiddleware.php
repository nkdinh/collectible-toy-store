<?php

namespace App\Http\Middleware;

use App\Repository\UserAuth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientLoginMiddleware
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

        if (!Session::has('clientUsername')) {
            dd(Session::get('clientUsername'));
            $out->writeln('unauthenticated');
            return redirect()->route('client.login');
        } else {
            dd(Session::get('clientUsername'));
            $out->writeln('authenticated: ' . Session::get('clientUsername'));
        }
        return $next($request);
    }
}
