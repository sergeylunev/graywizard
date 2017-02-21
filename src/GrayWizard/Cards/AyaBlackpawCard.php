<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class AyaBlackpawCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Aya Blackpaw';
    protected $manaCost = 6;
    protected $rarity = CardInterface::RARITY_RARE;
}
