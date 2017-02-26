<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class SmallTimeBuccaneerCard extends AbstractCard implements CardInterface
{
    protected $type = CardInterface::TYPE_CREATURE;
    protected $name = 'Small-Time Buccaneer';
    protected $manaCost = 1;
    protected $rarity = CardInterface::RARITY_COMMON;
}
