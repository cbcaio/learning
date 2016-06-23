<?php

namespace App\MultipleProductsApproach;

use App\MultipleProductsApproach\Contracts\Creator;
use App\MultipleProductsApproach\Contracts\Product;

class ProductFactory extends Creator
{
    protected function factoryMethod(Product $product)
    {
        return $product->getProperties();
    }
}
