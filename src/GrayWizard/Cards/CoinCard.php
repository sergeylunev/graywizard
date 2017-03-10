<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class CoinCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_SPELL;
    protected $name = 'Coin';
    protected $manaCost = 0;
}
