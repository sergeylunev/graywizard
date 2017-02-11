<?php

namespace GrayWizard;

class Deck
{
	public $DeckArray = [];
		
	public function __construct($Card)
	{
		if ($Card != []) {
		$this->DeckArray[] = $Card; }
	}	
		
	public function count()
	{
		return count($this->DeckArray);
	}
	

}