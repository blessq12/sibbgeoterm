<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $this->loadViewsFrom(resource_path('views/layouts'), 'layouts');
        $this->loadViewsFrom(resource_path('views/includes'), 'includes');
        $this->loadViewsFrom(resource_path('views/front'), 'front');
        $this->loadViewsFrom(resource_path('views/crm'), 'crm');

        View::composer(['errors::*', 'errors.*'], function($view){
            $view->with('company', Company::first());
        });
        
    }
}
