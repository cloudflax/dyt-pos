<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class DashboardLayoutConfigs
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        $session = session('configs');
        $configs = [
            'menus' => [
                'isHorizontal' => $session['menus']['isHorizontal'] ?? true,
            ],
        ];

        if (!$session) {
            session()->put('configs', $configs);
        }

        View::share('configs', $configs);

        return $next($request);
    }
}
