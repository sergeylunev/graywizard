<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class TunnelTroggCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Tunnel Trogg';
    protected $manaCost = 1;
    protected $rarity = CardInterface::RARITY_COMMON;
}
