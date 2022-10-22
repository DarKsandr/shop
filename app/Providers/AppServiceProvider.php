<?php

namespace App\Providers;

use Manticoresearch\Index;
use Illuminate\Pagination\Paginator;
use App\Manticore\Index\ProductsIndex;
use Illuminate\Support\ServiceProvider;
use Manticoresearch\Search;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(\Manticoresearch\Client::class, function($app){
            return new \Manticoresearch\Client(['host'=> config('manticore.host'), 'port'=> config('manticore.port') ]);
        });

        $this->app->singleton(ProductsIndex::class, function($app){
            return new ProductsIndex($app->make(\Manticoresearch\Client::class), 'products');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrapFive();
    }
}
