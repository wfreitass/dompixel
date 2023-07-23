<?php

namespace App\Providers;

use App\Interfaces\BaseInterface;
use App\Interfaces\ProductInterface;
use App\Repositories\BaseRepository;
use App\Repositories\ProductReposiroty;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseInterface::class, BaseRepository::class);
        $this->app->bind(ProductInterface::class, ProductReposiroty::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
