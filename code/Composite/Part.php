<?php

namespace Composite;

/**
 * Class Part
 * @package Composite
 *
 * Defines a simple part, which can't have a child
 */
class Part extends Equipment
{
    /**
     * @param Equipment $equipment
     */
    public function add(Equipment $equipment)
    {
        return; //a part can't have any child
    }

    /**
     * @param Equipment $equipment
     */
    public function remove(Equipment $equipment)
    {
        return; //can't remove child
    }

    /**
     * Default behaviour
     */
    public function isComposite()
    {
        return; //it's not composite
    }

    /**
     * Default behaviour
     */
    public function getAllParts()
    {
        return; //it's a simple part, it can't have any parts on it
    }
}
