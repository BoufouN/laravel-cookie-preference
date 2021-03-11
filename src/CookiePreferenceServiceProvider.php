<?php

namespace Boufoun\CookiePreference;

use Illuminate\Support\ServiceProvider;

class CookiePreferenceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/cookie-preference.php', 'cookie-preference'
        );

        // Register our controller
        $this->app->make('Boufoun\CookiePreference\Controllers\CookiePreferenceController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishables();

        $this->loadResourcesAndRoutes();
    }

    /**
     * Register all publishable files
     *
     * @return void
     */
    protected function registerPublishables(): void
    {
        $this->publishes([
            __DIR__.'/../config/cookie-preference.php' => config_path('cookie-preference.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/cookie-preference')
        ], 'lang');

        $this->publishes([
            __DIR__.'/../resources/views/' => resource_path('views/vendor/cookie-preference')
        ], 'views');

        $this->publishes([
            __DIR__.'/../resources/assets/css/' => public_path('vendor/cookie-preference/css')
        ], 'styles');

        $this->publishes([
            __DIR__.'/../resources/assets/js/' => public_path('vendor/cookie-preference/js')
        ], 'scripts');
    }

    /**
     * Load the package resources and routes
     *
     * @return void
     */
    protected function loadResourcesAndRoutes(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'cookie-preference');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cookie-preference');
    }

}
