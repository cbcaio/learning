<?php

namespace App;

class ConcreteClass extends AbstractClass
{
    protected function executeFirstMethod()
    {
        $this->prop = "The first method has been executed";
    }

    protected function executeSecondMethod()
    {
        $this->prop2 = "The second method has been executed";
    }
}
