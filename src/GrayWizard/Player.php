<?php

namespace GrayWizard;

use GrayWizard\Interfaces\DeckInterface;
use GrayWizard\Interfaces\GraveYardInterface;
use GrayWizard\Interfaces\HandInterface;

class Player
{
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
    }

    public function wounds($argument1)
    {
        // TODO: write logic here
    }

    public function heal($argument1)
    {
        // TODO: write logic here
    }

    public function isAlive()
    {
        // TODO: write logic here
    }
}
