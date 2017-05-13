<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

interface ServerRequestFactoryInterface
{
    /**
     * Create a new server request.
     *
     * @param string $method
     * @param UriInterface|string $uri
     * @param array $server optional server params ($_SERVER or similar structure)
     *
     * @return ServerRequestInterface
     */
    public function createServerRequest($method, $uri, $server = []);
}
