<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

interface ServerRequestFactoryInterface
{
    /**
     * Create a new server request.
     *
     * Note that server-params are taken precisely as given - no parsing/processing
     * of the given values is performed, and, in particular, no attempt is made to
     * determine the HTTP method or URI, which must be provided explicitly.
     *
     * @param string $method
     * @param UriInterface|string $uri
     * @param array $server optional server params ($_SERVER or similar structure)
     *
     * @return ServerRequestInterface
     */
    public function createServerRequest($method, $uri, $server = []);
}
