<?php

namespace GrayWizard\Interfaces;

interface CardFactoryInterface
{
    /**
     * Creating card based on given name
     *
     * @param $cardName
     * @return CardInterface
     * @throws \Exception if we try to create not existing card
     */
    public function createCard($cardName);

    /**
     * Check if we have such card in our system.
     * If we have, we can create it
     *
     * @param $cardName
     * @return bool
     */
    public function hasCard($cardName);
}