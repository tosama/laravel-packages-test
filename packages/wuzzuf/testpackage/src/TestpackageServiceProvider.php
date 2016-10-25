<?php

namespace Wuzzuf\Testpackage;

use Illuminate\Support\ServiceProvider;

class TestpackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Bind Package views, config, migrations and translations into Laravel App Globals
         * to access them using the global methods
         */
        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'wuzzuf/testpackage');
        $this->mergeConfigFrom(
            __DIR__ . '/Config/main.php', 'wuzzuf-testpackage-main'
        );
        //$this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        //$this->loadTranslationsFrom(__DIR__.'/Resources/Lang', 'wuzzuf/testpackage');

        /*
         * Publish package views, config, translations and assets into their respective folders
         * in the laravel app when running:
         * php artisan vendor:publish --force
         */
        $this->publishes([
            __DIR__.'/Resources/Views' => resource_path('views/vendor/wuzzuf/testpackage'),
        ],'views');
        $this->publishes([
            __DIR__.'/Config/main.php' => config_path('wuzzuf-testpackage-main.php'),
        ]);
        $this->publishes([
            __DIR__.'/Resources/Lang' => resource_path('lang/vendor/wuzzuf/testpackage'),
        ]);
        $this->publishes([
            __DIR__.'/Resources/Assets' => public_path('vendor/wuzzuf/testpackage'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }
}
