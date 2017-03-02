<?php

namespace GrayWizard;

class Game
{
    const STARTED = 'started';
    const NOT_STARTED = 'not_started';

    
    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $currentTurn;

    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->setStatus(self::NOT_STARTED);
        $this->setCurrentTurn(0); 
        $player = '\GrayWizard\\Player';
    if (class_exists($player))
    {
        $player1 = new $player();
        $player2 = new $player();
    }
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    protected function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Starting the game
     */
    public function start()
    {
        $this->setStatus(self::STARTED);
        $this->setCurrentTurn(1);
    }

    /**
     * @return int
     */
    public function getCurrentTurn()
    {
        return $this->currentTurn;
    }

    /**
     * @param int $currentTurn
     */
    protected function setCurrentTurn($currentTurn)
    {
        $this->currentTurn = $currentTurn;
    }

    /**
     * @return int
     * @throws \Exception
     */
    public function passTurn()
    {
        if ($this->getStatus() === self::NOT_STARTED) {
            throw new \Exception('Game not started. Can\'t pass turn');
        }
        $this->setCurrentTurn($this->getCurrentTurn() + 1);

        return $this->getCurrentTurn();
    }

    /**
     * @return Player
     */
    public function getFirstPlayer()
    {
        // TODO: This need to return actual player
        return $this->player1();
    }

    /**
     * @return Player
     */
    public function getSecondPlayer()
    {
        // TODO: This need to return actual player
        return $this->player2();
        
    }
}
