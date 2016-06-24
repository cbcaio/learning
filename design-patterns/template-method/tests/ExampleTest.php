<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function tests_example()
    {
        $concrete_class = new \App\ConcreteClass();
        $concrete_class->templateMethod(); // Calling father method on child class
        $this->assertEquals('The first method has been executed', $concrete_class->prop);
        $this->assertEquals('The second method has been executed', $concrete_class->prop2);
    }
}