<?php

namespace FactoryMethod;

/**
 * Class ProductCar an abstract class for all products that factories can produce
 */
abstract class ProductCar
{
    /**
     * @var string
     */
    protected $model;

    /**
     * @var int
     */
    protected $year;

    /**
     * @var int
     */
    protected $sellPrice;

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Each of the product types uses a different algorithm for setting the price,
     * so this method needs to be implemented in the products.
     *
     * @param int $internalPrice
     */
    abstract function setSellPrice($internalPrice);

    /**
     * @return string
     */
    public function model()
    {
        return $this->model;
    }

    /**
     * @return integer
     */
    public function year()
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function sellPrice()
    {
        return $this->sellPrice;
    }
}
