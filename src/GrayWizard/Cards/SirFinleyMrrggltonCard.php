<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class SirFinleyMrrggltonCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Sir Finley Mrrgglton';
    protected $manaCost = 1;
    protected $rarity = CardInterface::RARITY_RARE;
}
