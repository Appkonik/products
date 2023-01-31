<?php

namespace Appkonik\Products;

use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'products');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'products');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('products.php'),
            ], 'config');

            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
            if (!class_exists('CreateProductsTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/2023_01_31_000001_create_products_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_products_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/products'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/products'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/products'),
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
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'products');

        // Register the main class to use with the facade
        $this->app->singleton('products', function () {
            return new Products;
        });
    }
}
