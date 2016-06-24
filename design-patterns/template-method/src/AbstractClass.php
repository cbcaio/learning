<?php

namespace App;

abstract class AbstractClass
{
    public $prop;
    public $prop2;

    public function templateMethod()
    {
        $this->executeFirstMethod();
        $this->executeSecondMethod();
    }

    abstract protected function executeFirstMethod();

    abstract protected function executeSecondMethod();
}
