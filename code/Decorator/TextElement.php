<?php

namespace Decorator;

class TextElement implements ElementInterface
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function renderElement()
    {
        return $this->text;
    }
}
