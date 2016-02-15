<?php

namespace Strategy;

/**
 * Class SmsFormatter does format using the SMS formatting strategy
 *
 * @package Strategy
 */
class SmsFormatter extends Formatter
{
    /**
     * SMS formatting
     *
     * @param string $message
     */
    public function formatMessage($message)
    {
        $this->formattedMessage = 'SMS message: ' . $message;
    }
}
