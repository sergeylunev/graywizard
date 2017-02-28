<?php

namespace GrayWizard;

class ManaPool
{
    protected $activeMana;
    protected $manaCrystals;

    public function __construct()
    {
        $this->activeMana = 1;
        $this->manaCrystals = 1;
    }

    public function getActiveMana()
    {
        return $this->activeMana;
    }

    public function spend($amount)
    {
        if (!$this->canSpend($amount)) {
            throw new \Exception("We don't have such amount of mana available");
        }
        $this->activeMana = $this->activeMana - $amount;
    }

    public function canSpend($amount)
    {
        return $this->activeMana >= $amount;
    }

    public function getManaCrystals()
    {
        return $this->manaCrystals;
    }
}
