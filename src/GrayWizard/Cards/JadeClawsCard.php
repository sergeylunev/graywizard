<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class JadeClawsCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_WEAPON;
    protected $name = 'Jade Claws';
    protected $manaCost = 2;
    protected $rarity = CardInterface::RARITY_COMMON;
}
