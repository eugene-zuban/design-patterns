<?php

namespace Composite;

/**
 * Class CompositePart
 * @package Composite
 *
 * Defines a Composite Part which can have a child
 */
class CompositePart extends Equipment
{
    /**
     * @var [] Equipment
     */
    protected $parts = [];

    /**
     * @return CompositePart $this
     */
    public function isComposite()
    {
        return $this;
    }

    /**
     * @param Equipment $equipment
     */
    public function add(Equipment $equipment)
    {
        $this->parts[] = $equipment;
    }

    /**
     * @param Equipment $equipment
     */
    public function remove(Equipment $equipment)
    {
        $index =  array_search($equipment, $this->parts);
        unset($this->parts[$index]);
    }

    /**
     * @return string
     */
    public function getAllParts()
    {
        $parts_names = '';

        /** @var Equipment $part */
        foreach ($this->parts as $part) {
            /** @var CompositePart $part */
            if (is_object($composite = $part->isComposite())) {
                $parts_names .= $composite->getAllParts();
            }

            $parts_names .= "Part: {$part->getName()}\n";
        }

        return $parts_names;
    }

    /**
     * Get price for all bundle
     *
     * @return int
     */
    public function getPrice()
    {
        $price = 0;

        /** @var Equipment $part */
        foreach ($this->parts as $part)
        {
            $price = $part->getPrice() + $price;
        }

        return $price + $this->partPrice;
    }
}
