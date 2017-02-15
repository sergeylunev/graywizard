<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class PatchesThePirateCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Patches the Pirate';
    protected $manaCost = 1;
    protected $rarity = CardInterface::RARITY_RARE;
}
