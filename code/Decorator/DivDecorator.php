<?php

namespace Decorator;

/**
 * Class DivDecorator wraps the output inside the <div> tag
 * @package Decorator
 */
class DivDecorator extends Decorator
{
    /**
     * Puts the parent's output inside the <div> tag
     * @return string
     */
    public function renderElement()
    {
        $element = '<div>';
        $element .= parent::renderElement();
        $element .= '</div>';

        return $element;
    }
}
