<?php

namespace GrayWizard;

class Deck
{
    public $DeckArray = [];

    public function __construct($Card)
    {
		
        $tempArr = array_count_values($Card);
        $commonCard = ['Test', 'Coin', 'LightningBolt'];
        $legendCard = ['PatchesThePirate', 'Leroy'];
    
        foreach ($tempArr as $key=>$cardCount)
        {
            if (!class_exists('GrayWizard\\Cards\\' . $key . 'Card')) {		
                throw new \Exception('Wrong Card: ' . $key);
            }		

        $newClass = ('\GrayWizard\\Cards\\' . $key . 'Card');
        $newCard = new $newClass();
            if (($cardCount > 2) or (($cardCount>1)	and ($newCard->isRare() == 'rare'))) {
                throw new \Exception('Too many copies '.$key);
            }			
        }
		
        if ($Card != []) {
            $this->DeckArray = $Card; 
        }
    }	

    public function shuffle()
    {
        return 0;
    }
    
    public function draw()
    {
        $newClass = ('\GrayWizard\\Cards\\' . $this->DeckArray[0] . 'Card');
        $drowCard = new $newClass();
        unset($this->DeckArray[0]);
        $this->DeckArray = array_values($this->DeckArray);
        return $drowCard;
    }

    public function count()
    {
        return count($this->DeckArray);
    }	
}
