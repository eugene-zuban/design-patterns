<?php

namespace Strategy;

/**
 * Class SmsFormatter does the formatting using the SMS formatting strategy (algorithm)
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
