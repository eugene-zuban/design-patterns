<?php

namespace FactoryMethod;

class BmwCar implements ProductCar
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
     * @param string $model
     * @param int $year
     */
    public function __construct($model, $year)
    {
        $this->model = $model;

        $this->year = $year;
    }

    public function model()
    {
        // TODO: Implement model() method.
    }

    public function year()
    {
        // TODO: Implement year() method.
    }
}
