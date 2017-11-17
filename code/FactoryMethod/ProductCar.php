<?php

namespace FactoryMethod;

/**
 * Class ProductCar an abstract class for all the products factories can produce.
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
     * Each of the product types uses different algorithm for calculating price,
     * so this method needs to be implemented in all products.
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
