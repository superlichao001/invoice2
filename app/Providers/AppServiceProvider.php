<?php

namespace App\Providers;

use App\Repositories\Api\InvoiceService;
use App\Repositories\Api\RepositoryInterfaces\InvoiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(InvoiceInterface::class, InvoiceService::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
