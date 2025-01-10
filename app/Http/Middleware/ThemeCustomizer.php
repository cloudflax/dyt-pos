<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ThemeCustomizer
{
    /**
     * Handle an incoming request.
     *
     * This middleware checks the session for a theme configuration and sets a default
     * layout if none is found. It then shares the theme configuration with all views.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        # Retrieve the theme configuration from the session
        $session = session('theme');

        #dd($session);

        # Define the default theme layout if not set in the session
        $theme   = [
            'layout'          => $session['layout']          ?? 'horizontal',
            'layout-mode'     => $session['layout-mode']     ?? 'light',
            'layout-width'    => $session['layout-width']    ?? 'fluid',
            'layout-position' => $session['layout-position'] ?? 'fixed',
            'topbar-color'    => $session['topbar-color']    ?? 'light',
            'sidebar-size'    => $session['sidebar-size']    ?? 'default',
            'sidebar-color'   => $session['sidebar-color']   ?? 'light',
        ];

        # If no theme configuration is found in the session, set the default theme
        if (!$session) {
            session()->put('theme', $theme);
        }

        # Share the theme configuration with all views
        View::share('theme', $theme);

        # Proceed with the next middleware or request handling
        return $next($request);
    }
}
