<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class AbstractCard implements CardInterface
{
    protected $rarity = CardInterface::RARITY_COMMON;

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getManaCost()
    {
        return $this->manaCost;
    }

    public function getRarity()
    {
        return $this->rarity;
    }

    public function isRare()
    {
        return $this->getRarity() === CardInterface::RARITY_RARE;
    }
}
