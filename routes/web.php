<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeCustomizer;

# Route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

# Group of routes that require authentication
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    # Route to set the theme customizer
    Route::name('theme.customizer')->post(
        '/theme/customizer', [ThemeCustomizer::class, 'set']
    );

    # Route for the dashboard view
    Route::name('dashboard')->get('/dashboard', function () {
        return view('dashboard');
    });

});
