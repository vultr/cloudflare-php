<?php
/**
 * User: junade
 * Date: 13/01/2017
 * Time: 18:01
 */

namespace Cloudflare\API\Auth;

class UserServiceKey implements Auth
{
    public function __construct(private readonly string $userServiceKey)
    {
    }

    public function getHeaders(): array
    {
        return [
            'X-Auth-User-Service-Key' => $this->userServiceKey,
        ];
    }
}
