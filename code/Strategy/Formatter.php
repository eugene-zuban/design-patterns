<?php

namespace Strategy;

/**
 * Class Formatter abstract class for implementing the Strategy pattern
 *
 * @package Strategy
 */
abstract class Formatter implements FormatterInterface
{
    /**
     * @var string
     */
    protected $formattedMessage;

    /**
     * @param string $message unformatted message
     */
    abstract public function formatMessage($message);

    /**
     * @return string - a formatted with selected strategy message
     */
    public function formattedMessage()
    {
        return $this->formattedMessage;
    }
}
