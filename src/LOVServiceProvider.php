<?php

namespace Mojoblanco\LOV;

use Illuminate\Support\ServiceProvider;

class LOVServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publishes config file
        $this->publishes([
            __DIR__.'/../config/lov.php' => config_path('lov.php')
        ], 'config');

        // Publishes migration file
        if(!class_exists('CreateLOVTables')) {
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__.'/../database/migrations/create_lov_tables.php.stub' => database_path("/migrations/{$timestamp}_create_lov_tables.php"),
            ], 'migrations');
        }

        // Publishes seeder file
        if(!class_exists('LOVSeeder')) {
            $this->publishes([
                __DIR__.'/../database/seeds/LOVSeeder.php.stub' => database_path("/seeds/LOVSeeder.php"),
            ], 'seeds');
        }
    }

    public function register()
    {
    }
}