<?php

namespace Lavalite\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'product');

        // Load translation
        $this->loadTranslationsFrom(__DIR__.'/../../../../resources/lang', 'product');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__.'/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('product', function ($app) {
            return $this->app->make('Lavalite\Product\Product');
        });

        // Repository binds
                // Bind Product to repository
        $this->app->bind(
            \Lavalite\Product\Interfaces\ProductRepositoryInterface::class,
            \Lavalite\Product\Repositories\Eloquent\ProductRepository::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['product'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__.'/../../../../config/config.php' => config_path('package/product.php')], 'config');

        // Publish public view
        $this->publishes([__DIR__.'/../../../../resources/views/public'  => base_path('resources/views/vendor/product/public')], 'view-public');

        // Publish admin view
        $this->publishes([__DIR__.'/../../../../resources/views/admin' => base_path('resources/views/vendor/product/admin')], 'view-admin');

        // Publish language files
        $this->publishes([__DIR__.'/../../../../resources/lang' => base_path('resources/lang/vendor/courier')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__.'/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__.'/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');
    }
}
