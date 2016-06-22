<?php
namespace SOLID\OpenClosed\beforePrinciple;

class Rectangle
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }
}
