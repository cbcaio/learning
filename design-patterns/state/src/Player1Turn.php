<?php
namespace App;

class Player1Turn implements GameContext
{
    protected $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function play()
    {
        $this->game->setCurrentState($this->game->getPlayer2TurnState());

        return "Player 1 have played";
    }
}
