<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class FlametongueTotemCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Flametongue Totem';
    protected $manaCost = 2;
    protected $rarity = CardInterface::RARITY_COMMON;
}
