<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RectangleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Rectangle', 'App\Services\Rectangle');
    }
}
