<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class LavaBurstCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Lava Burst';
    protected $manaCost = 3;
    protected $rarity = CardInterface::RARITY_COMMON;
}
