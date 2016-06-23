<?php

namespace App;

class DynamicObjectNaming implements PrototypeInterface
{
    const CONCRETE = "[Concrete] DynamicObjectNaming" . PHP_EOL;

    protected $name;

    public function __construct()
    {
        $this->name = "Default name";
        echo "Constructor executed" . PHP_EOL;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function doSomething()
    {
        echo "Do something " . $this->name . PHP_EOL;
    }

    public function __clone()
    {
        $this->setName('Cloned');
    }
}
