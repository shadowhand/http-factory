<?php

namespace Psr\Http\Factory\Stream;

use Psr\Http\Message\StreamInterface;

interface ResourceStreamFactoryInterface
{
    /**
     * Create a new stream from a resource.
     *
     * @param resource $body
     *
     * @return StreamInterface
     *
     * @throws \InvalidArgumentException
     *  If a passed resource is not readable.
     */
    public function createStreamFromResource($body);
}
