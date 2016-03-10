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

    /**
     * Forward the rendering request to the element's object
     * @return mixed
     */
    public function renderElement()
    {
        return $this->element->renderElement();
    }
}
