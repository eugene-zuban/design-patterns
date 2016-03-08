<?php

namespace Decorator;

class SpanDecorator extends Decorator
{
    public function renderElement()
    {
        $element = '<span>';
        $element .= parent::renderElement();
        $element .= '</span>';

        return $element;
    }
}