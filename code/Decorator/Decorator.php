<?php

namespace Decorator;

class Decorator implements ElementInterface
{
    /**
     * @var ElementInterface
     */
    protected $element;

    /**
     * Decorator constructor.
     * @param ElementInterface $element
     */
    public function __construct(ElementInterface $element)
    {
        $this->element = $element;
    }

    /**
     * Forwards the request to the element
     *
     * @return string
     */
    public function renderElement()
    {
        return $this->element->renderElement();
    }
}
