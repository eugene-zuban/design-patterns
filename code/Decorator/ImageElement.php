<?php

namespace Decorator;

/**
 * Class ImageElement creates an image with <img> tag
 * @package Decorator
 */
class ImageElement implements ElementInterface
{
    /**
     * @var string
     */
    protected $src;

    /**
     * @var string
     */
    protected $alt;

    /**
     * @param string $src
     * @param string $alt
     */
    public function __construct($src, $alt = '')
    {
        $this->src = $src;

        $this->alt = $alt;
    }

    /**
     * @return string
     */
    public function renderElement()
    {
        return "<img src='{$this->src}' alt='{$this->alt}'>";
    }
}
