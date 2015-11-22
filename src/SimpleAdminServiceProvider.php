<?php

namespace Hofkens\SimpleAdminGit;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'simpleAdminGit');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/hofkens/simpleAdminGit'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Hofkens\SimpleAdminGit\SimpleAdminController');
    }
}
