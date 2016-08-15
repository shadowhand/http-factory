<?php

namespace Psr\Http\Factory\ServerRequest;

use Psr\Http\Message\ServerRequestInterface;

interface GlobalServerRequestFactoryInterface
{
    /**
     * Create a new server request from PHP globals.
     *
     * @return ServerRequestInterface
     */
    public function createServerRequestFromGlobals();
}
