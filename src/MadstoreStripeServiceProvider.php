<?php

namespace Madnest\MadstoreStripe;

use Illuminate\Support\ServiceProvider;

class MadstoreStripeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'madstore-stripe');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'madstore-stripe');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/madstore-stripe.php' => config_path('madstore-stripe.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/madstore-stripe'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/madstore-stripe'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/madstore-stripe'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/madstore-stripe.php', 'madstore-stripe');

        // Register the main class to use with the facade
        $this->app->singleton('madstore-stripe', function () {
            return new MadstoreStripe;
        });
    }
}
