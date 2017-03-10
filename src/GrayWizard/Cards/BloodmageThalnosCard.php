<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class BloodmageThalnosCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Bloodmage Thalnos';
    protected $manaCost = 2;
    protected $rarity = CardInterface::RARITY_RARE;
}
