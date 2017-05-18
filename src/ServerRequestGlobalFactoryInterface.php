<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

interface ServerRequestGlobalFactoryInterface
{
    /**
     * Create a new server request from superglobals.
     *
     * If any of the parameters are not supplied, the corresponding superglobal
     * value will be used instead.
     *
     * @param array $server
     * @param array $query
     * @param array $body
     * @param array $cookies
     * @param array $files
     *
     * @return ServerRequestInterface
     */
    public function createServerRequestFromGlobals(
        array $server = null,
        array $query = null,
        array $body = null,
        array $cookies = null,
        array $files = null
    );
}
