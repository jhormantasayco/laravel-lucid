<?php

namespace Lucid\Events;

class OperationStarted
{
    /**
     * OperationStarted constructor.
     * 
     * @param  string  $name
     * @param  array  $arguments
     */
    public function __construct(
        public string $name,
        public array $arguments = []
    ){}
}
