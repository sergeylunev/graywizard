<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class FlamewreathedFacelessCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Flamewreathed Faceless';
    protected $manaCost = 4;
    protected $rarity = CardInterface::RARITY_COMMON;
}
