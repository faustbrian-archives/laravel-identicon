<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Identicon.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Identicon;

use Identicon\Identicon;
use Illuminate\Support\ServiceProvider;

class IdenticonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/config/laravel-identicon.php' => config_path('laravel-identicon.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../resources/config/laravel-identicon.php', 'laravel-identicon');

        $this->registerBuilder();
    }

    /**
     * Register the builder.
     */
    private function registerBuilder()
    {
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
