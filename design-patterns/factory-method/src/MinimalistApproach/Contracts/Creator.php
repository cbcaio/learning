<?php

namespace App\MinimalistApproach\Contracts;

abstract class Creator
{
    protected abstract function factoryMethod();

    public function startFactory()
    {
        return $this->factoryMethod();
    }
}