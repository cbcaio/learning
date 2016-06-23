<?php

namespace App\MultipleProductsApproach;

use App\MultipleProductsApproach\Contracts\Product;

class TextProduct implements Product
{
    public function getProperties()
    {
        return $this;
    }
}
