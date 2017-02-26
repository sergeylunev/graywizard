<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class TotemGolemCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Totem Golem';
    protected $manaCost = 2;
    protected $rarity = CardInterface::RARITY_COMMON;
}
