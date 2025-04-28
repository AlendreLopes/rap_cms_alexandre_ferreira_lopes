<?php

namespace App;

class Container
{
    protected $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolver($key)
    {

        if (!array_key_exists($key, $this->bindings)) {

            throw new \Exception("Error Processing Request code: {$key}");

        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);

    }
}