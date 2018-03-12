<?php

namespace Vikingdesign\Forum;

use Illuminate\Support\ServiceProvider;

class ForumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/Routes/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vikingdesign\Forum\Controllers\ForumController');
        $this->loadViewsFrom(__DIR__.'/Views', 'forum');
    }
}
