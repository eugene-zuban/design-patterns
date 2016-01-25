<?php

namespace Composite;

/**
 * Interface Operations
 * @package Composite
 */
interface Operations
{
    public function add(Equipment $equipment);

    public function remove(Equipment $equipment);

    public function getAllParts();
}
