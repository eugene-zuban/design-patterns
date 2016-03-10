<?php

namespace Decorator;

/**
 * Class ImageElement generates an image with <img> tag
 * @package Decorator
 */
class ImageElement implements ElementInterface
{
    /**
     * @var string image source
     */
    protected $src;

    /**
     * @var string image alt text
     */
    protected $alt;

    /**
     * ImageElement constructor.
     * @param $src
     * @param $alt
     */
    public function __construct($src, $alt = '')
    {
        $this->src = $src;

        $this->alt = $alt;
    }

    /**
     * @return string html img tag
     */
    public function renderElement()
    {
        return "<img src='{$this->src}' alt='{$this->alt}'>";
    }
}
