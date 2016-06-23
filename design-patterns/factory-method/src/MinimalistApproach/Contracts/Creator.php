<?php

namespace App\MinimalistApproach\Contracts;

abstract class Creator
{
    abstract protected function factoryMethod();

    public function startFactory()
    {
        return $this->factoryMethod();
    }
}
