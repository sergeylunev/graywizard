<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class SouthseaDeckhandCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Southsea Deckhand';
    protected $manaCost = 1;
    protected $rarity = CardInterface::RARITY_COMMON;
}
