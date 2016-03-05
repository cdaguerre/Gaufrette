<?php

namespace Gaufrette\Exception;

use Gaufrette\Exception;

/**
 * Exception to be thrown when a file was not found.
 *
 * @author Antoine Hérault <antoine.herault@gmail.com>
 */
class FileNotFound extends Base
{
    public function __construct($key, $code = 0, \Exception $previous = null)
    {
        $this->key = $key;

        parent::__construct(
            sprintf('The file "%s" was not found.', $key),
            $code,
            $previous
        );
    }
}
