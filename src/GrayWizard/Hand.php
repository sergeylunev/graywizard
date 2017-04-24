<?php

namespace GrayWizard;

use GrayWizard\Interfaces\CardInterface;
use GrayWizard\Interfaces\HandInterface;

class Hand implements HandInterface
{
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
     * Getting max size of hand
     *
     * @return int
     */
    public function getMaximumSize()
    {
        return self::MAX_SIZE;
    }

    /**
     * Add card to hand
     *
     * @param CardInterface $card
     */
    public function addCard($card)
    {
        if ($this->count() === self::MAX_SIZE) {
            return;
        }

        $this->cards[] = $card;
    }

    /**
     * Count cards in hand
     *
     * @return int
     */
    public function count()
    {
        return count($this->cards);
    }

    /**
     * Get list of all cards in hand
     *
     * @return CardInterface[]
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param \GrayWizard\Interfaces\CardInterface $cardToPlay
     *
     * @return \GrayWizard\Interfaces\CardInterface|mixed
     * @throws \Exception
     */
    public function play(CardInterface $cardToPlay)
    {
        if (!in_array($cardToPlay, $this->cards)) {
            throw new \Exception('We don\'t have such card in hand');
        }

        $cardKey = array_search($cardToPlay, $this->cards);

        $card = $this->cards[$cardKey];
        unset($this->cards[$cardKey]);

        return $card;
    }
}
