<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamFactoryInterface
{
    /**
     * Create a new stream from a resource.
     *
     * @param resource $resource
     *
     * @return StreamInterface
     */
    public function createStream($resource);

    /**
     * Create a new stream from a file.
     *
     * @param string $path
     * @param string $mode
     *
     * @return StreamInterface
     */
    public function createStreamFromFile($path, $mode = 'r');

    /**
     * Create a new stream from a string.
     *
     * String content will be used as the body of the stream.
     *
     * @param string $content
     *
     * @return StreamInterface
     */
    public function createStreamFromString($content);
}
