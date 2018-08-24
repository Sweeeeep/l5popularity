<?php

namespace Sweeeeep\Popularity;

use Illuminate\Support\ServiceProvider;

class PopularityServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sweeeeep');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'sweeeeep');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            // $this->publishes([
            //     __DIR__.'/../config/popularity.php' => config_path('popularity.php'),
            // ], 'popularity.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/sweeeeep'),
            ], 'popularity.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/sweeeeep'),
            ], 'popularity.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/sweeeeep'),
            ], 'popularity.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/popularity.php', 'popularity');

        // Register the service the package provides.
        $this->app->singleton('popularity', function ($app) {
            return new Popularity;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['popularity'];
    }
}
