<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class FlamewreathedFacelessCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Flamewreathed Faceless';
    protected $manaCost = 4;
    protected $rarity = CardInterface::RARITY_COMMON;
}
