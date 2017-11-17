<?php

namespace Composite;

/**
 * Class Equipment
 * @package Composite
 *
 * Abstract class defines methods and properties for all equipments.
 */
abstract class Equipment implements Operations, Price
{
    /**
     * @var string
     */
    protected $partName;

    /**
     * @var int
     */
    protected $partPrice;

    /**
     * @param string $partName
     */
    public function __construct($partName)
    {
        $this->partName = $partName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->partName;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->partPrice = $price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->partPrice;
    }

    abstract public function add(Equipment $equipment);

    abstract public function remove(Equipment $equipment);

    abstract public function getAllParts();

    abstract public function getComposite();
}
