<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class FlametongueTotemCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Flametongue Totem';
    protected $manaCost = 2;
    protected $rarity = CardInterface::RARITY_COMMON;
}
