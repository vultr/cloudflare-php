<?php
/**
 * User: junade
 * Date: 13/01/2017
 * Time: 16:55
 */

namespace Cloudflare\API\Auth;

class APIKey implements Auth
{
    public function __construct(private readonly string $email, private readonly string $apiKey)
    {
    }

    public function getHeaders(): array
    {
        return [
            'X-Auth-Email'   => $this->email,
            'X-Auth-Key' => $this->apiKey
        ];
    }
}
