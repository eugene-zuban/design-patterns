<?php

namespace Decorator;

/**
 * Class SpanDecorator wraps output inside <span> tag
 * @package Decorator
 */
class SpanDecorator extends Decorator
{
    /**
     * @return string
     */
    public function renderElement()
    {
        $element = '<span>';
        $element .= parent::renderElement();
        $element .= '</span>';

        return $element;
    }
}