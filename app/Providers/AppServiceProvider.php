<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Responses\CustomLogoutResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            LogoutResponse::class,
            CustomLogoutResponse::class
        );
    }

    public function boot(): void
    {
        // Force HTTPS in production (or always if needed)
        if (App::environment('production') || true) {
            URL::forceScheme('https');
        }
    }
}
