<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamResourceFactoryInterface
{
    /**
     * Create a new stream from a resource.
     *
     * The resource MUST be readable and SHOULD be seekable. It MAY be writable.
     *
     * @param resource $resource
     *
     * @return StreamInterface
     */
    public function createStreamFromResource($resource);
}
