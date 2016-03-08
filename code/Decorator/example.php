<?php

require (__DIR__ . '/../../vendor/autoload.php');

$text = new \Decorator\TextElement('Simple text');

echo $text->renderElement() . PHP_EOL;

$spanText = new \Decorator\SpanDecorator($text);

echo $spanText->renderElement() . PHP_EOL;

$spanSecond = new \Decorator\SpanDecorator($spanText);

echo $spanSecond->renderElement() . PHP_EOL;