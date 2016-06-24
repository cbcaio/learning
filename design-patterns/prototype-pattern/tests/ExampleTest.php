<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function tests_example()
    {
        $data_from_somewhere = [
            'App\DynamicObjectNaming',
            'foo',
            'bar'
        ];
        $obj_name            = $data_from_somewhere[0];
        $obj                 = new $obj_name;
        echo $obj::CONCRETE;
        $obj->doSomething();

        // constructor not executed
        $clone = clone $obj;
        // name changed through __clone method
        echo $clone->doSomething();
        echo "This is a clone of " . $clone::CONCRETE . PHP_EOL;
        echo "Child of " . $clone::PROTO . PHP_EOL;
    }

}