<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function tests_example()
    {
        $client = new \App\Client();
        $this->assertEquals(72.999, $client->makeAdapterRequest(new \App\EuroAdapter(), 40, 50));
        $this->assertEquals(90, $client->makeDollarRequest(new \App\DollarCalculator(), 40, 50));
    }
}