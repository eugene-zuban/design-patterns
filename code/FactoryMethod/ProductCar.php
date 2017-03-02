<?php

namespace FactoryMethod;

/**
 * Class ProductCar an abstract class for any product that our factories can produce
 */
abstract class ProductCar
{
    /**
     * @var string
     */
    protected $manufacture;

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
     * Each of the product types uses different algorithms for calculating the price,
     * so this method needs to be implemented in all the products.
     *
     * @param int $price
     */
    abstract function setInternalPrice($price);

    /**
     * @return string
     */
    public function manufacture()
    {
        return $this->manufacture;
    }

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
