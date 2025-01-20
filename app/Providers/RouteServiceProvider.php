<?php

namespace App\Providers;


use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       

        $this->routes(function () {
            Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));

            Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));

            Route::middleware('web', 'auth')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));

            });
    }
}
