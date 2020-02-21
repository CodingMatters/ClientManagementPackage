<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Repository;
use GuzzleHttp\Client;

final class ClientRegistration
{
    public static function save(string $username, string $first_name)
    {
        $client = new Client(['base_uri' => config('codingmatters.crm.url')]);
        $response = $client->post('/sample', ['name' => 'gab']);
        dd($response);
    }
}
