<?php
namespace SOLID\OpenClosed\beforePrinciple;

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}
