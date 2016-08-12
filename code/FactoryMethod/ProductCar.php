<?php

namespace FactoryMethod;

/**
 * Interface ProductCar
 */
interface ProductCar
{
    /**
     * @param string $model
     * @param integer $year
     */
    public function __construct($model, $year);

    /**
     * @return string
     */
    public function model();

    /**
     * @return integer
     */
    public function year();
}
