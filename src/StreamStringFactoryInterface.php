<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamStringFactoryInterface
{
    /**
     * Create a new stream from a string.
     *
     * A temporary resource will be created from the string that is writable
     * and seekable.
     *
     * A filename MAY NOT be used here.
     *
     * @param string $content
     *
     * @return StreamInterface
     */
    public function createStreamFromString($content);
}
