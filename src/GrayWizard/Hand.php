<?php

namespace GrayWizard;

use GrayWizard\CardInterface;

class Hand
{
    const MAX_SIZE = 10;

    /**
     * @var array
     */
    protected $cards = [];

    public function __construct(array $cards = [])
    {
        $this->cards = $cards;
    }

    public function count()
    {
        return count($this->cards);
    }

    public function getMaximumSize()
    {
        return self::MAX_SIZE;
    }

    public function addCard(CardInterface $card)
    {
        if ($this->count() === self::MAX_SIZE) {
            return;
        }
        
        $this->cards[] = $card;
    }

    public function getCards()
    {
        return $this->cards;
    }
}
