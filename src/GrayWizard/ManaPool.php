<?php

namespace GrayWizard;

class ManaPool
{
    const MAX_AMOUNT = 10;

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

    public function addManaCrystal()
    {
        if (!$this->canAddManaCrystal()) {
            throw new \Exception("We can't add more than maximum amount of mana crystals");
        }
        $this->manaCrystals++;
    }

    public function canAddManaCrystal()
    {
        return $this->manaCrystals !== self::MAX_AMOUNT;
    }
}
