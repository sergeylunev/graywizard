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

    /**
     * @param CardInterface[] $cards Array of instance of Cards
     */
    public function __construct(array $cards = [])
    {
        $this->cards = $cards;
    }

    /**
     * Count cards in hand
     * @return int
     */
    public function count()
    {
        return count($this->cards);
    }

    /**
     * Getting max size of hand
     * @return int 
     */
    public function getMaximumSize()
    {
        return self::MAX_SIZE;
    }

    /**
     * Add card to hand
     * @param CardInterface $card
     */
    public function addCard(CardInterface $card)
    {
        if ($this->count() === self::MAX_SIZE) {
            return;
        }
        
        $this->cards[] = $card;
    }

    /**
     * Get list of all cards in hand
     * @return CardInterface[]
     */
    public function getCards()
    {
        return $this->cards;
    }
}
