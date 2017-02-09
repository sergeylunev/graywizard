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

    public function __construct()
    {
        $this->setStatus(self::NOT_STARTED);
        $this->setCurrentTurn(0);        
    }

    public function getStatus()
    {
        return $this->status;
    }

    protected function setStatus($status)
    {
        $this->status = $status;
    }

    public function start()
    {
        $this->setStatus(self::STARTED);
        $this->setCurrentTurn(1);
    }

    public function getCurrentTurn()
    {
        return $this->currentTurn;
    }

    protected function setCurrentTurn($currentTurn)
    {
        $this->currentTurn = $currentTurn;
    }

    /**
     * @return int
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
        return new Player();
    }

    /**
     * @return Player
     */
    public function getSecondPlayer()
    {
        return new Player();
    }
}
