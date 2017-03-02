<?php

namespace Strategy;

/**
 * Class Formatter is an abstract class that represents a Strategy pattern
 *
 * @package Strategy
 */
abstract class Formatter
{
    /**
     * @var string
     */
    protected $formattedMessage;

    /**
     * @param string $message
     */
    abstract public function formatMessage($message);

    /**
     * @return string
     */
    public function formattedMessage()
    {
        return $this->formattedMessage;
    }
}
