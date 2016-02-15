<?php

namespace Strategy;

/**
 * Class Message
 *
 * Message class does formatting messages using an instance of a Formatter subclass
 * (Composition in Design Pattern analogy)
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
     * A formatter instance determines which formatter (algorithm) to use while formatting a message
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
     * Doing formatting with selected formatter
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
