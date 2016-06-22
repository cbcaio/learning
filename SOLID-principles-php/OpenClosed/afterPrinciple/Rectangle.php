<?php
namespace SOLID\OpenClosed\afterPrinciple;

class Rectangle implements Shape
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    public function area()
    {
        return  $this->width * $this->height;
    }
}
