<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class FeralSpiritCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Feral Spirit';
    protected $manaCost = 3;
    protected $rarity = CardInterface::RARITY_COMMON;
}
