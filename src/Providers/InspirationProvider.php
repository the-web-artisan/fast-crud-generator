<?php

namespace Scout\Inspire\Providers;

use Illuminate\Support\ServiceProvider;
use Scout\Inspire\Console\Commands\CustomCommand;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                CustomCommand::class,
            ]);
        }
    }
}
