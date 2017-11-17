<?php

namespace Decorator;

class Decorator implements ElementInterface
{
    /**
     * @var ElementInterface
     */
    protected $element;

    /**
     * @param ElementInterface $element
     */
    public function __construct(ElementInterface $element)
    {
        $this->element = $element;
    }

    /**
     * Forwards request to the element.
     *
     * @return string
     */
    public function renderElement()
    {
        return $this->element->renderElement();
    }
}
