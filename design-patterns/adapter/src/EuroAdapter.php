<?php

namespace App;

class EuroAdapter extends CurrencyCalculator implements Currency
{
    public function __construct()
    {
        $this->adjustRate();
    }

    public function adjustRate()
    {
        $this->rate = .8111;

        return $this->rate;
    }
}
