<?php

namespace GrayWizard;

class Player
{
    public function getHand()
    {
        return new Hand();
    }

    public function getDeck()
    {
        return new Deck([]);
    }

    public function getGraveYard()
    {
        return new GraveYard();
    }
}
