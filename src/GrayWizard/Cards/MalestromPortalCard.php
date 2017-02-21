<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class MalestromPortalCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Malestrom Portal';
    protected $manaCost = 2;
    protected $rarity = CardInterface::RARITY_COMMON;
}
