<?php

/*
 * This file is part of Laravel Identicon.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Identicon;

use Illuminate\Support\ServiceProvider;
use Identicon\Identicon;

class IdenticonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-invoice.php' => config_path('laravel-invoice.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-invoice.php', 'laravel-invoice');

        $this->app->singleton('identicon', function ($app) {
            return new Identicon(new $app['config']['identicon']['generator']());
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return array_merge(parent::provides(), ['identicon']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName(): string
    {
        return 'identicon';
    }
}
