<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Repository;

use GuzzleHttp\Client as GuzzleClient;

final class Client
{
    public static function register(string $uuid, string $username, string $firstName, string $lastName)
    {
        $client = new GuzzleClient(['base_uri' => config('codingmatters.crm.url')]);
        $payload = ['first_name' => $firstName, 'last_name' => $lastName, 'code' => $uuid, 'username' => $username];

        try {
            return $client->post('/register', ['json' => $payload]);
        } catch (\Exception $exception) {
            // must log $exception->getMessage();
        }
    }
}
