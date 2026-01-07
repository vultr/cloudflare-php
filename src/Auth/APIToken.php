<?php
/**
 * User: czPechy
 * Date: 30/07/2018
 * Time: 22:42
 */

namespace Cloudflare\API\Auth;

class APIToken implements Auth
{
    public function __construct(private string $apiToken)
    {
    }

    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->apiToken
        ];
    }
}
