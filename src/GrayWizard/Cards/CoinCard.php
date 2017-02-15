<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class CoinCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Coin';
    protected $manaCost = 0;
}
