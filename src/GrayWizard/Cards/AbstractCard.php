<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class AbstractCard implements CardInterface
{
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
}
