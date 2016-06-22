<?php

namespace App\MultipleProductsApproach;

use App\MultipleProductsApproach\Contracts\Product;

class GraphicProduct implements Product
{
    public function getProperties()
    {
        return $this;
    }
}