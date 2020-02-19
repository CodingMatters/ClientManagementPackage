<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Providers;

use Illuminate\Support\ServiceProvider;

final class ClientManagementServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->loadDatabase();
    }

    public function register() : void
    {
        $this->mergeConfigFile();
    }

    private function loadDatabase() : void
    {
        $this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
    }

    private function mergeConfigFile() : void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/codingmatters.php', 'codingmatters');
    }
}
