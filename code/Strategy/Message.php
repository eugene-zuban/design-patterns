<?php

namespace Strategy;

/**
 * Class Message
 *
 * Message class does a messages formatting using the Formatter subclass instance
 *
 * @package Strategy
 */
class Message
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @var Formatter
     */
    protected $formatter;

    /**
     * A formatter instance determines which formatter (algorithm) to use for the formatting.
     *
     * @param Formatter $formatter
     */
    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Doing the formatting using selected formatter
     */
    public function formatMessage()
    {
        $this->formatter->formatMessage($this->message);
    }

    /**
     * @return string
     */
    public function formattedMessage()
    {
        return $this->formatter->formattedMessage();
    }
}
