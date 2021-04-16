<?php

namespace Sparkout\ModuleUserAuth;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ModuleUserAuthServiceProvider extends ServiceProvider
{
    private static $routeOptions = [
        'namespace' => 'Sparkout\ModuleUserAuth\Controllers',
        'prefix' => '',
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'module-user-auth');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'module-user-auth');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        Route::group(self::$routeOptions, function () {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('module-user-auth.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/module-user-auth'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/module-user-auth'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/module-user-auth'),
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
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'sparkout-user-auth');

        // Register the main class to use with the facade
        $this->app->singleton('module-user-auth', function () {
            return new ModuleUserAuth;
        });
    }
}
