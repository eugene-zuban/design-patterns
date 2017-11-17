<?php

namespace Strategy;

/**
 * Class Message formats the message using Formatter
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
     * A $formatter instance sets which formatter (algorithm) to use.
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
     * Formatting the message with selected formatter.
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
