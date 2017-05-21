<?php

namespace GrayWizard\Interfaces;

interface ManaPoolInterface
{
    public function getActiveMana();

    public function spend($amount);

    public function canSpend($amount);

    public function getManaCrystals();

    public function onTurnStart();

    public function canAddManaCrystal();

    public function addManaCrystal();

    public function refresh();

    public function addActiveMana();
}