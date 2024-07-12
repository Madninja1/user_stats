<?php

namespace Enzosharp\UserStats;

use Enzosharp\UserStats\Providers\SeedServiceProvider;
use Enzosharp\UserStats\Services\UserStatsService;
use Enzosharp\UserStats\Services\UserStatsServiceImpl;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        $this->app->bind(UserStatsService::class, UserStatsServiceImpl::class);
    }

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/es_stats.php', 'es_stats');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views/', 'es_userStats');

        $this->publishes(
            [
                __DIR__ . '/../config/es_stats.php' => config_path('es_stats.php'),
            ],
            ['config', 'es_stats.config']
        );

        $this->publishes(
            [
                __DIR__ . '/../database/factories' => database_path('factories'),
                __DIR__ . '/../database/seeders' => database_path('seeders'),
                __DIR__ . '/../src/Models' => app_path('Models'),
            ],
            ['database', 'es_stats.database']
        );
    }
}