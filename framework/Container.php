<?php

namespace framework;

use Exception;

class Container
{
    protected array $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function singleton($key, $resolver)
    {
        $this->bindings[$key] = function () use ($resolver) {
            static $object;

            if (!$object) {
                $object = $resolver();
            }

            return $object;
        };
    }

    /**
     * @throws Exception
     */
    public function resolve($key)
    {
        if (!isset($this->bindings[$key])) {
            throw new BindingNotFoundException($key);
        }

        return call_user_func($this->bindings[$key]);
    }
}