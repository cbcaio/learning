<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function tests_example()
    {
        $client = new \App\Client();

        var_dump($client->basicSite->getSite());
        var_dump($client->basicSite);

        $this->assertEquals(1200, $client->basicSite->getPrice());
        $client->basicSite = new \App\Video($client->basicSite);

        var_dump($client->basicSite->getSite());
        var_dump($client->basicSite);

        $this->assertEquals(1200 + 350, $client->basicSite->getPrice());
        $client->basicSite = new \App\Database($client->basicSite);

        var_dump($client->basicSite->getSite());
        var_dump($client->basicSite);

        $this->assertEquals(1200 + 350 + 666, $client->basicSite->getPrice());

    }
}