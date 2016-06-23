<?php

namespace App\MinimalistApproach;

use App\MinimalistApproach\Contracts\Creator;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();

        return $product->getProperties();
    }
}
