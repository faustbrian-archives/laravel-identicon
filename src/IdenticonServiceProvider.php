<?php



declare(strict_types=1);



namespace BrianFaust\Identicon;

use BrianFaust\ServiceProvider\AbstractServiceProvider;
use Identicon\Identicon;

class IdenticonServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishConfig();
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        parent::register();

        $this->mergeConfig();

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
