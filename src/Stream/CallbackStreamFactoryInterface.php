<?php

namespace Psr\Http\Factory\Stream;

use Psr\Http\Message\StreamInterface;

interface CallbackStreamFactoryInterface
{
    /**
     * Create a new stream from a callback.
     *
     * The stream will be read-only and not seekable.
     *
     * @param callable $callback
     *
     * @return StreamInterface
     */
    public function createStreamFromCallback(callable $callback);
}
