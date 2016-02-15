<?php

class StrategyDesignTest extends PHPUnit_Framework_TestCase
{
    protected $smsExpected;

    protected $mmsExpected;

    protected $emailExpected;

    protected $messageBody;

    public function setUp()
    {
        $this->messageBody = 'A simple message';

        $this->smsExpected = 'SMS message: ' . $this->messageBody;

        $this->mmsExpected = 'MMS message: ' . $this->messageBody;

        $this->emailExpected = 'Email message: ' . $this->messageBody;
    }

    public function testStrategy()
    {
        //test SMS formatter
        $message = new \Strategy\Message(new \Strategy\SmsFormatter());
        $message->setMessage($this->messageBody);
        $message->formatMessage();
        $this->assertEquals($this->smsExpected, $message->formattedMessage());

        //test MMS formatter
        $message = new \Strategy\Message(new \Strategy\MmsFormatter());
        $message->setMessage($this->messageBody);
        $message->formatMessage();
        $this->assertEquals($this->mmsExpected, $message->formattedMessage());

        //test Email formatter
        $message = new \Strategy\Message(new \Strategy\EmailFormatter());
        $message->setMessage($this->messageBody);
        $message->formatMessage();
        $this->assertEquals($this->emailExpected, $message->formattedMessage());
    }
}
