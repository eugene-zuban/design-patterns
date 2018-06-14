<?php

use Decorator\TextElement;
use Decorator\ImageElement;
use Decorator\DivDecorator;
use Decorator\SpanDecorator;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testDecorator()
    {
        //create and render a simple text node, without any tags
        $text = new TextElement('Simple text');
        $output = $text->renderElement();
        $this->assertEquals('Simple text', $output);

        //decorate the $text node with one <span> tag
        $spanText = new SpanDecorator($text);
        $output = $spanText->renderElement();
        $this->assertEquals('<span>Simple text</span>', $output);

        //decorate the $spanText with additional span
        $doubleSpan = new SpanDecorator($spanText);
        $output = $doubleSpan->renderElement();
        $this->assertEquals('<span><span>Simple text</span></span>', $output);

        //testing the image object's creating process along with placing it into a <div> element
        $decoratedImage = new DivDecorator(new ImageElement('image.png', 'Nice image'));
        $this->assertEquals("<div><img src='image.png' alt='Nice image'></div>", $decoratedImage->renderElement());

        //decorate a new image with <div> and <span>
        $decoratedImage = new DivDecorator(new SpanDecorator(new ImageElement('image.png', 'Nice image')));
        $this->assertEquals("<div><span><img src='image.png' alt='Nice image'></span></div>", $decoratedImage->renderElement());
    }
}
