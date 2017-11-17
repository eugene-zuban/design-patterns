<?php

namespace Strategy;

/**
 * Class SmsFormatter formats the message with SMS formatting strategy (algorithm).
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
