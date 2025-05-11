<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        //
    }
}

// public function map()
// {
//     $this->mapWebRoutes();
//     $this->mapAdminRoutes();
//     $this->mapCustomerRoutes();
// }

// protected function mapAdminRoutes()
// {
//     Route::middleware('web')
//         ->group(base_path('routes/admin.php'));
// }

// protected function mapCustomerRoutes()
// {
//     Route::middleware('web')
//         ->group(base_path('routes/customer.php'));
// }
