<?php

namespace Decorator;

class Decorator implements ElementInterface
{
    /**
     * @var ElementInterface
     */
    protected $element;

    public function __construct(ElementInterface $element)
    {
        $this->element = $element;
    }

    public function renderElement()
    {
        return $this->element->renderElement();
    }
}
