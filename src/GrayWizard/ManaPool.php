<?php

namespace GrayWizard;

class ManaPool
{
    const MAX_AMOUNT = 10;

    /**
     * @var int
     */
    protected $activeMana;
    /**
     * @var int
     */
    protected $manaCrystals;

    /**
     * ManaPool constructor.
     */
    public function __construct()
    {
        $this->activeMana = 1;
        $this->manaCrystals = 1;
    }

    /**
     * @return int
     */
    public function getActiveMana()
    {
        return $this->activeMana;
    }

    /**
     * @param int $amount
     *
     * @throws \Exception
     */
    public function spend($amount)
    {
        if (!$this->canSpend($amount)) {
            throw new \Exception("We don't have such amount of mana available");
        }
        $this->activeMana = $this->activeMana - $amount;
    }

    /**
     * @param int $amount
     *
     * @return bool
     */
    public function canSpend($amount)
    {
        return $this->activeMana >= $amount;
    }

    /**
     * @return int
     */
    public function getManaCrystals()
    {
        return $this->manaCrystals;
    }

    public function onTurnStart()
    {
        if ($this->canAddManaCrystal()) {
            $this->addManaCrystal();
        }
        $this->refresh();
    }

    /**
     * @return bool
     */
    public function canAddManaCrystal()
    {
        return $this->manaCrystals !== self::MAX_AMOUNT;
    }

    /**
     * @throws \Exception
     */
    public function addManaCrystal()
    {
        if (!$this->canAddManaCrystal()) {
            throw new \Exception("We can't add more than maximum amount of mana crystals");
        }

        $this->manaCrystals++;
    }

    public function refresh()
    {
        $this->activeMana = $this->manaCrystals;
    }

    public function addActiveMana()
    {
        if ($this->activeMana === self::MAX_AMOUNT) {
            return;
        }

        $this->activeMana++;
    }
}
