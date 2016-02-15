<?php

require (__DIR__ . '/../../vendor/autoload.php');

//using SMS formatter
$sms = new \Strategy\Message(new \Strategy\SmsFormatter());
$sms->setMessage('This is a simple SSM message');
$sms->formatMessage();
echo ($sms->formattedMessage() . PHP_EOL);

//using MMS formatter
$mms = new \Strategy\Message(new \Strategy\MmsFormatter());
$mms->setMessage('This is a simple MMS message');
$mms->formatMessage();
echo ($mms->formattedMessage() . PHP_EOL);

//using Email formatter
$email = new \Strategy\Message(new \Strategy\EmailFormatter());
$email->setMessage('This is a simple Email message');
$email->formatMessage();
echo ($email->formattedMessage() . PHP_EOL);
