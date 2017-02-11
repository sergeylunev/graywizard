<?php

namespace GrayWizard;

class Deck
{
	public $DeckArray = [];
		
	public function count()
	{
		return count($this->DeckArray);
	}
}