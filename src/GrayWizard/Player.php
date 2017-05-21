<?php

namespace GrayWizard;

use GrayWizard\Interfaces\ManaPoolInterface;

class Player
{
    /**
     * @var ManaPoolInterface
     */
    private $manaPool;

    public function __construct($deck, $hand, $graveyard, ManaPoolInterface $manaPool)
    {
//        TODO: here we need to get Deck object as argument
//              also Hand and GraveYard objects needs to be passed as arguments
        $this->playerDeck = $deck;
        $this->playerHand = $hand;
        $this->playerGraveyard = $graveyard;
        $this->manaPool = $manaPool;
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

    public function getManaPool()
    {
        return $this->manaPool;
    }
}
