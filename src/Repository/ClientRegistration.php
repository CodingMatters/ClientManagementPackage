<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Repository;
use GuzzleHttp\Client;

final class ClientRegistration
{
    public static function save(string $uuid, string $username, string $firstName, string $lastName)
    {
        $client = new Client();
        $response = $client->post(config('codingmatters.crm.url') . '/register', ['first_name' => $firstName, 'last_name' => $lastName, 'code' =>$uuid, 'username' => $username]);
        dd($response);
    }
}
