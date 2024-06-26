<?php

namespace Lucid\Events;

class JobStarted
{
    /**
     * JobStarted constructor.
     * 
     * @param  string  $name
     * @param  array  $arguments
     */
    public function __construct(
        public string $name,
        public array $arguments = []
    ){}
}
