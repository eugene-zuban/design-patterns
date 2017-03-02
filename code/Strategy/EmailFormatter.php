<?php

namespace Strategy;

/**
 * Class EmailFormatter does the formatting using the Email formatting strategy (algorithm)
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
