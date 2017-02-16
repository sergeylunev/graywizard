<?php

namespace GrayWizard;

class Deck
{
    public $DeckArray = [];

    public function __construct($card)
    {	
        $tempArr = array_count_values($card);
    
        foreach ($tempArr as $key => $cardCount) {
            $cardClass = ('\GrayWizard\\Cards\\' . $key . 'Card');               
            if (!class_exists($cardClass)) {		
                throw new \Exception('Wrong Card: ' . $key);
            }		
            $newCard = new $cardClass(); 
        
            if (($cardCount > 2) || (($cardCount>1)	&& ($newCard->isRare()))) {
                throw new \Exception('Too many copies '.$key);
            }			
        }
		
        if ($card != []) {
            $this->DeckArray = $card; 
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
