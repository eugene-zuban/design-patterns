<?php

namespace Composite;

/**
 * Class Part
 * @package Composite
 *
 * Defines a simple part (a leaf) which can't have a child.
 */
class Part extends Equipment
{
    /**
     * @param Equipment $equipment
     */
    public function add(Equipment $equipment)
    {
        return; //this part can't have any child
    }

    /**
     * @param Equipment $equipment
     */
    public function remove(Equipment $equipment)
    {
        return; //can't remove a child
    }

    /**
     * Default behaviour
     */
    public function getComposite()
    {
        return; //it's not a composite
    }

    /**
     * Default behaviour
     */
    public function getAllParts()
    {
        return; //it's a simple part, it can't have any parts on it
    }
}
