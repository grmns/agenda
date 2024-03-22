<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Definir la autenticación personalizada viaRequest
        Auth::viaRequest('password', function ($request) {
            return User::where('email', $request->email)->first();
        });

        // No es necesario registrar el controlador LoginController aquí
    }
}
