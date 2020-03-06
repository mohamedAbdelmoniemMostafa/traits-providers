<?php

namespace Traits\Providers;

use Illuminate\Support\ServiceProvider;

class TraitProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(!file_exists(base_path('app/console/commands').'/TraitCommand.php')){
            $this->publishes([__DIR__.'/tools' => base_path('app/console/commands')]);
        }
    }
}
