<?php

namespace Waynelogic\MagicForms;

use Illuminate\Support\ServiceProvider;

class MagicFormsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'magic-forms');
    }
}
