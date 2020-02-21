<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Repository;
use GuzzleHttp\Client;

final class ClientRegistration
{
    public static function save(string $uuid, string $username, string $firstName, string $lastName)
    {
        try {
            $client = new Client(['base_uri' => config('codingmatters.crm.url')]);
            return $client->request("POST",'/register', ['json' => ['first_name' => $firstName, 'last_name' => $lastName, 'code' =>$uuid, 'username' => $username]]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
