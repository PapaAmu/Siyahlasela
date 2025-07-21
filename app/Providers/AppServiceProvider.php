<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Responses\CustomLogoutResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse; // Filament's contract

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
        //
    }
}
