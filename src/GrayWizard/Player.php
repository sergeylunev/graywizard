<?php

namespace GrayWizard;

class Player
{
    public function __construct($deck, $hand, $graveyard)
    {
//        TODO: here we need to get Deck object as argument
//              also Hand and GraveYard objects needs to be passed as arguments
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
}
