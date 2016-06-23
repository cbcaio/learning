<?php

namespace App\MinimalistApproach;

use App\MinimalistApproach\Contracts\Creator;

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();

        return $product->getProperties();
    }
}
