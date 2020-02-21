<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagementTests;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Orchestra\Testbench\TestCase;

abstract class CodingMattersTestCase extends TestCase
{
    public function getApplicationTimezone($app)
    {
        return 'Asia/Manila';
    }

    public function setUp(): void
    {
        parent::setUp();

        Eloquent::unguard();

        $this->loadLaravelMigrations();

        $this->artisan('migrate')->run();
    }

    protected function useCrmUrl($app)
    {
        $app->config->set('codingmatters.crm.url', 'http://crm.local');
    }
}