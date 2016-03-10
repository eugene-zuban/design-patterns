<?php

use Decorator\TextElement;
use Decorator\ImageElement;
use Decorator\DivDecorator;
use Decorator\SpanDecorator;

class DecoratorTest extends PHPUnit_Framework_TestCase
{
    public function testDecorator()
    {
        //create and render a simple text node, without any tags
        $text = new TextElement('Simple text');
        $output = $text->renderElement();
        $this->assertEquals('Simple text', $output);

        //decorate $text node with one <span> tag
        $spanText = new SpanDecorator($text);
        $output = $spanText->renderElement();
        $this->assertEquals('<span>Simple text</span>', $output);

        //decorate element with multiple spans
        $doubleSpan = new SpanDecorator($spanText);
        $output = $doubleSpan->renderElement();
        $this->assertEquals('<span><span>Simple text</span></span>', $output);

        //testing an image object decoration while using a little different syntax
        $decoratedImage = new DivDecorator(new ImageElement('image.png', 'Nice image'));
        $this->assertEquals("<div><img src='image.png' alt='Nice image'></div>", $decoratedImage->renderElement());

        //decorate image with div and span
        $decoratedImage = new DivDecorator(new SpanDecorator(new ImageElement('image.png', 'Nice image')));
        $this->assertEquals("<div><span><img src='image.png' alt='Nice image'></span></div>", $decoratedImage->renderElement());
    }
}
