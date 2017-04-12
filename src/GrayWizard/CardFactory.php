<?php

namespace GrayWizard;

use GrayWizard\Interfaces\CardFactoryInterface;
use GrayWizard\Interfaces\CardInterface;

class CardFactory implements CardFactoryInterface
{
    /**
     * Creating card based on given name
     *
     * @param $cardName
     * @return CardInterface
     * @throws \Exception if we try to create not existing card
     */
    public function createCard($cardName)
    {
        $cardClass = ('\GrayWizard\\Cards\\' . $cardName . 'Card');
        if (!class_exists($cardClass)) {
            throw new \Exception('Wrong Card: ' . $cardName);
        }
        
        $newCard = new $cardClass();
        
        return $newCard;
    }

    /**
     * Check if we have such card in our system.
     * If we have, we can create it
     *
     * @param $cardName
     * @return bool
     */
    public function hasCard($cardName)
    {
        $cardClass = ('\GrayWizard\\Cards\\' . $cardName . 'Card');
        $canCreate = true;
        
        if (!class_exists($cardClass)) {
            $canCreate = false;
        }
        
        return $canCreate;
    }
}
