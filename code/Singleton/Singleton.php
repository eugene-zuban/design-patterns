<?php

namespace Singleton;

class Singleton
{
    /**
     * Reference to the current object.
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
     * Disable public constructor.
     */
    protected function __construct()
    {
        // no code here
    }
}
