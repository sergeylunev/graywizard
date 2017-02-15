<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class LightningBoltCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Lightning Bolt';
    protected $manaCost = 1;
}
