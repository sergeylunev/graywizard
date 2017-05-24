<?php

namespace GrayWizard;

use GrayWizard\Interfaces\DeckInterface;
use GrayWizard\Interfaces\GraveYardInterface;
use GrayWizard\Interfaces\HandInterface;
use GrayWizard\Interfaces\PlayerInterface;

class Player
{
    
    public $playerHealth = PlayerInterface::MAX_HEALTH;
    
    /**
     * @var DeckInterface
     */
    protected $playerDeck;
    /**
     * @var HandInterface
     */
    protected $playerHand;
    /**
     * @var GraveYardInterface
     */
    protected $playerGraveyard;

    public function __construct(DeckInterface $deck, HandInterface $hand, GraveYardInterface $graveyard)
    {
        $this->playerDeck = $deck;
        $this->playerHand = $hand;
        $this->playerGraveyard = $graveyard;
    }

    public function getHand()
    {
        return $this->playerHand;
    }

    public function getDeck()
    {
        return $this->playerDeck;
    }

    public function getGraveYard()
    {
        return $this->playerGraveyard;
    }

    public function getHealth()
    {
        // TODO: write logic here        
        return $this->playerHealth;
    }

    public function wounds($argument1)
    {
        // TODO: write logic here
        $this->playerHealth = $this->playerHealth - $argument1;
        return $this->playerHealth;
    }

    public function heal($argument1)
    {
        // TODO: write logic here
        if ($this->playerHealth < 30)
        {
            $this->playerHealth = $this->playerHealth + $argument1;
            if ($this->playerHealth > 30)
            {
                $this->playerHealth = 30;
            }
        }
    }

    public function isAlive()
    {
        // TODO: write logic here
        $playerAlive = true;
        
        if ($this->playerHealth <= 0)
        {
            $playerAlive = false;
        }
        return $playerAlive;
    }
}
