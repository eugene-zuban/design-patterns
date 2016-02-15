<?php

namespace Strategy;

/**
 * Class SmsFormatter does format using the MMS formatting strategy
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
