<?php

namespace GrayWizard;

use GrayWizard\Interfaces\CardInterface;
use GrayWizard\Interfaces\DeckInterface;

class Deck implements DeckInterface
{
    public $deckArray = [];

    public function __construct(array $card)
    {
        $tempArr = array_count_values($card);

        foreach ($tempArr as $key => $cardCount) {
            $cardClass = ('\GrayWizard\\Cards\\' . $key . 'Card');
            if (!class_exists($cardClass)) {
                throw new \Exception('Wrong Card: ' . $key);
            }
            $newCard = new $cardClass();

            if (($cardCount > 2) || (($cardCount > 1) && ($newCard->isRare()))) {
                throw new \Exception('Too many copies ' . $key);
            }
        }

        if ($card != []) {
            $this->deckArray = $card;
        }
    }

    public function shuffle(): void
    {
        shuffle($this->deckArray);
    }

    public function draw(): CardInterface
    {
        $newClass = '\GrayWizard\\Cards\\' . array_pop($this->deckArray) . 'Card';

        return new $newClass();
    }

    public function count()
    {
        return count($this->deckArray);
    }
}
