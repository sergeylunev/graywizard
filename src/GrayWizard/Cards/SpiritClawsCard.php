<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class SpiritClawsCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_WEAPON;
    protected $name = 'Spirit Claws';
    protected $manaCost = 1;
    protected $rarity = CardInterface::RARITY_COMMON;
}
