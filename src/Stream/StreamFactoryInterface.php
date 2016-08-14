<?php

namespace Psr\Http\Factory\Stream;

use Psr\Http\Message\StreamInterface;

interface StreamFactoryInterface
{
    /**
     * Create a new stream from a string.
     *
     * A temporary resource will be created with the content of the string.
     * The resource will be writable and seekable.
     *
     * @param string $body
     *
     * @return StreamInterface
     */
    public function createStream($body = '');
}
