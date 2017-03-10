<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class AzureDrakeCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Azure Drake';
    protected $manaCost = 5;
    protected $rarity = CardInterface::RARITY_COMMON;
}
