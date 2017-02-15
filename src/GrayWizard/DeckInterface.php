<?php

namespace GrayWizard;

use GrayWizard\CardInterface;

interface DeckInterface
{
    /**
     * @param array $cards Array with card names
     */
    public function __construct(array $cards);

    /**
     * Shuffle deck
     */
    public function shuffle();

    /**
     * Drawing card from the deck
     * @return CardInterface
     */
    public function draw();

    /**
     * Count cards in deck
     * @return integer
     */
    public function count();
}
