<?php

namespace Decorator;

/**
 * Class TextElement renders a simple text node without any additional tags
 * @package Decorator
 */
class TextElement implements ElementInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * TextElement constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Returns a simple text node without any tags
     * @return string
     */
    public function renderElement()
    {
        return $this->text;
    }
}
