<?php
namespace App;

class Player2Turn implements GameContext
{
    protected $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function play()
    {
        $this->game->setCurrentState($this->game->getPlayer1TurnState());

        return "Player 2 have played";
    }
}
