<?php

declare(strict_types=1);

namespace CodingMatters\ClientManagement\Repository;

final class ClientRegistration
{
    public static function save(string $username, string $first_name)
    {
        dd(config('codingmatters.crm.url'));
    }
}
