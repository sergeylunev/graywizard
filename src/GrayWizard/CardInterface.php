<?php

namespace GrayWizard;

interface CardInterface
{
    const TYPE_SPELL = 'spell';
    const TYPE_CREATURE = 'creature';

    const RARITY_COMMON = 'common';
    const RARITY_RARE = 'rare';

    /**
     * Getting name of a Card
     * @return string
     */
    public function getName();

    /**
     * Get type of a Card
     * @return string
     */
    public function getType();

    /**
     * Get manacost of card
     * @return int
     */
    public function getManaCost();

    /**
     * Get rarity of card
     * @return string
     */
    public function getRarity();

    /**
     * Check if card is rare (we can use only 1 copy in deck)
     * @return bool
     */
    public function isRare();
}
