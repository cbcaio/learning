<?php

namespace App\MinimalistApproach;

use App\MinimalistApproach\Contracts\Product;

class TextProduct implements Product
{
    public function getProperties()
    {
        return $this;
    }
}