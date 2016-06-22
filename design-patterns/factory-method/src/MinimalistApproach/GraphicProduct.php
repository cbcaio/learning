<?php

namespace App\MinimalistApproach;


use App\MinimalistApproach\Contracts\Product;

class GraphicProduct implements Product
{
    public function getProperties()
    {
        return $this;
    }
}