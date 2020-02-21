<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagementTests;

use CodingMatters\ClientManagement\Repository\ClientRegistration;
use Illuminate\Foundation\Testing\WithFaker;

final class ClientRegistrationTest extends CodingMattersTestCase
{
    use WithFaker;

    /**
     * @test
     */
    public function registrationWasSuccessful() : void
    {
        $this->assertTrue(true);
    }
}