<?php

namespace Strategy;

/**
 * Class EmailFormatter does format using the Email formatting strategy
 *
 * @package Strategy
 */
class EmailFormatter extends Formatter
{
    /**
     * Email formatting
     *
     * @param string $message
     */
    public function formatMessage($message)
    {
        $this->formattedMessage = 'Email message: ' . $message;
    }
}
