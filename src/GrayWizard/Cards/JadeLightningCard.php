<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class JadeLightningCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Jade Lightning';
    protected $manaCost = 4;
    protected $rarity = CardInterface::RARITY_COMMON;
}
