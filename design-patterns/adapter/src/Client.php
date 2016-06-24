<?php

namespace App;

class Client
{
    public function makeAdapterRequest(CurrencyCalculator $currencyRate, $value1, $value2)
    {
        return $currencyRate->calculateTotal($value1, $value2);
    }

    public function makeDollarRequest(DollarCalculator $dollarCalculator, $value1, $value2)
    {
        return $dollarCalculator->calculateTotal($value1, $value2);
    }
}
