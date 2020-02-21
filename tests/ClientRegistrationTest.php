<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagementTests;

use CodingMatters\ClientManagement\Repository\Client;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;

final class ClientRegistrationTest extends CodingMattersTestCase
{
    use WithFaker;

    /**
     * @test
     * @environment-setup useCrmUrl
     */
    public function registrationWasSuccessful() : void
    {
        $response = Client::register(
            Str::uuid()->toString(),
            $this->faker->userName,
            $this->faker->firstName,
            $this->faker->lastName
        );

        $this->assertEquals(201, $response->getStatusCode());

        $this->assertJsonStringEqualsJsonString(
            json_encode(['success' => true, 'message' => "A new client is registered"]),
            $response->getBody()->getContents()
        );
    }
}