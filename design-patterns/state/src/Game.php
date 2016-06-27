<?php
namespace App;

class Game
{
    /** @var Player1Turn */
    private $player1Turn;

    /** @var Player2Turn */
    private $player2Turn;

    /** @var GameContext */
    private $currentState;

    public function __construct()
    {
        $this->player1Turn  = new Player1Turn($this);
        $this->player2Turn  = new Player2Turn($this);
        $this->currentState = $this->player1Turn;
    }

    public function setCurrentState(GameContext $state)
    {
        $this->currentState = $state;
    }

    public function performPlay()
    {
        return $this->currentState->play();
    }

    public function getPlayer1TurnState()
    {
        return $this->player1Turn;
    }

    public function getPlayer2TurnState()
    {
        return $this->player2Turn;
    }
}
