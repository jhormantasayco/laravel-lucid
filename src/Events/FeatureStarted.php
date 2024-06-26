<?php

namespace Lucid\Events;

class FeatureStarted
{
    /**
     * FeatureStarted constructor.
     * 
     * @param  string  $name
     * @param  array  $arguments
     */
    public function __construct(
        public string $name,
        public array $arguments = [])
    {}
}
