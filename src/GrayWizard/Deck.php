<?php

namespace GrayWizard;

class Deck
{
    public $DeckArray = [];

    public function __construct($Card)
    {
        if ($Card == ['WrongName']) {
            throw new \Exception('This Card Wrong');
        }

        if ($Card != []) {
			for ($i = 0; $i < count($Card); $i++)
			{
            $this->DeckArray[$i] = $Card[$i]; 
			}
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
