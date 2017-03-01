<?php

namespace Singleton;

class Singleton
{
    /**
     * Reference to current object
     *
     * @var Singleton
     */
    private static $instance;

    /**
     * @return Singleton
     */
    public static function instance()
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Make the constructor protected for preventing of using directly.
     */
    protected function __construct()
    {
        // no code here
    }
}
