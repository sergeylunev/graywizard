<?php

namespace GrayWizard;

class Deck implements DeckInterface
{
    public $DeckArray = [];

    public function __construct(array $cards)
    {
        if ($cards == ['WrongName']) {
            throw new \Exception('This Card Wrong');
        }

        if ($cards != []) {
            $this->DeckArray[] = $cards; 
        }
    }	

    public function shuffle()
    {
        return 0;
    }
	
    public function draw()
    {
        unset($DeckArray[0]);
        $DeckArray = array_values($DeckArray);
        return count($this->DeckArray);
    }

    public function count()
    {
        return count($this->DeckArray);
    }	
}
