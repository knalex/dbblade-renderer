<?php

namespace Knalex\DbTemplate;

use Illuminate\Support\ServiceProvider;

class DbTemplateServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

}
