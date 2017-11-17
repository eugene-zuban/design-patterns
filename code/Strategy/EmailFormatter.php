<?php

namespace Strategy;

/**
 * Class EmailFormatter formats the message with Email Strategy (algorithm).
 *
 * @package Strategy
 */
class EmailFormatter extends Formatter
{
    /**
     * Email formatting.
     *
     * @param string $message
     */
    public function formatMessage($message)
    {
        $this->formattedMessage = 'Email message: ' . $message;
    }
}
