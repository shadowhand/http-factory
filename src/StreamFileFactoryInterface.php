<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\StreamInterface;

interface StreamFileFactoryInterface
{
    /**
     * Create a new stream from a file.
     *
     * The file MUST be opened as readable. The stream SHOULD NOT be seekable
     * or writable.
     *
     * @param string $filename
     *
     * @return StreamInterface
     */
    public function createStreamFromFile($filename);
}
