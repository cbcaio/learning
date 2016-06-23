<?php

namespace App\MultipleProductsApproach\Contracts;

abstract class Creator
{
    abstract protected function factoryMethod(Product $product);

    public function make($product)
    {
        return $this->factoryMethod(new $product);
    }
}
