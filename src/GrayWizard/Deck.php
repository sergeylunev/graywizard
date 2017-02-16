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
			if (($cardCount > 2) or (($cardCount>1) and (in_array($key, $legendCard)))) {
				throw new \Exception('Too many copies '.$key);
			}
			
			if (!class_exists($key . 'Card')) {		
			    throw new \Exception('Wrong Card: ' . $key);
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
        unset($this->DeckArray[0]);
        $this->DeckArray = array_values($this->DeckArray);
		$drowCard = new TestCard();
        return $drowCard;
    }

    public function count()
    {
        return count($this->DeckArray);
    }	
}
