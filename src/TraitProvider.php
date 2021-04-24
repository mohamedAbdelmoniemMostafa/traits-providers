<?php

namespace Traits\Providers;

use Illuminate\Support\ServiceProvider;
use Traits\Providers\Generators\TraitCommand;

class TraitProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(TraitCommand::class);
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
