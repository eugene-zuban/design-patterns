<?php

namespace Strategy;

/**
 * Class SmsFormatter formats the message with MMS formatting Strategy (algorithm).
 *
 * @package Strategy
 */
class MmsFormatter extends Formatter
{
    /**
     * MMS formatting
     *
     * @param string $message
     */
    public function formatMessage($message)
    {
        $this->formattedMessage = 'MMS message: ' . $message;
    }
}
