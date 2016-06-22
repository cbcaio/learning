<?php

namespace App\MultipleProductsApproach\Contracts;

abstract class Creator
{
    protected abstract function factoryMethod(Product $product);

    public function make($product)
    {
        return $this->factoryMethod(new $product);
    }
}