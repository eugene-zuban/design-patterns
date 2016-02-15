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

    public static function instance()
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Make constructor protected to prevent using it outside the class
     */
    protected function __construct()
    {

    }
}
