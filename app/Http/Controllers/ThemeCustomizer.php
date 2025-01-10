<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\ThemeCustomizerRequest;

class ThemeCustomizer extends Controller
{
    /**
     * Set the dashboard layout configuration.
     *
     * This method validates the incoming request using the ThemeCustomizerRequest,
     * then stores the theme configuration in the session.
     *
     * @param  ThemeCustomizerRequest  $request  The incoming request containing the theme configuration.
     * @return JsonResponse  A JSON response indicating success.
     */
    public function set(ThemeCustomizerRequest $request): JsonResponse
    {
        # Validate the request and retrieve the theme configuration
        $theme = $request->validated();

        # Store the theme configuration in the session
        session([
            'theme' => [
                'layout'           => $theme['layout'],
                'layout-mode'      => $theme['layout-mode'],
                'layout-width'     => $theme['layout-width'],
                'layout-position'  => $theme['layout-position'],
                'topbar-color'     => $theme['topbar-color'],
                'sidebar-size'     => $theme['sidebar-size'],
                'sidebar-color'    => $theme['sidebar-color'],
            ],
        ]);

        # Return a JSON response indicating success
        return response()->json(['success' => true]);
    }
}
