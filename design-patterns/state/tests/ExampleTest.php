<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function tests_game_flow()
    {
        $game = new \App\Game();
        // initial state
        $this->assertEquals("Player 1 have played", $game->performPlay());
        // now game is on its second state
        $this->assertEquals("Player 2 have played", $game->performPlay());
    }
}