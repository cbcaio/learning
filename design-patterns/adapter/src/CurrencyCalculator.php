<?php

namespace App;

abstract class CurrencyCalculator
{
    protected $value;
    protected $product_value;
    protected $service_value;
    public $rate = 1;

    public function calculateTotal($product_value, $service_value)
    {
        $this->product_value = $product_value;
        $this->service_value = $service_value;
        $this->value         = $this->product_value + $this->service_value;

        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->value *= $this->rate;

        return $this->value;
    }
}
