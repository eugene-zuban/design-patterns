<?php

namespace Strategy;

/**
 * Class SmsFormatter does the formatting using the MMS formatting strategy (algorithm)
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
