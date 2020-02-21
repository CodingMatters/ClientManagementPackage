<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Repository;

final class Client
{
    private $token;

    public function __construct(string $url, string $token)
    {
        // token authentication
        dd(config('codingmatters.client-service.url'));
        $this->token = $token;
    }

    public function save(string $name)
    {
        throw new \Exception();
    }
}
