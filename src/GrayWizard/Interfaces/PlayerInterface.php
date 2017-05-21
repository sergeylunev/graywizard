<?php

namespace GrayWizard\Interfaces;

interface PlayerInterface
{
    const MAX_HEALTH = 30;

    /**
     * PlayerInterface constructor.
     * @param DeckInterface $deck
     * @param HandInterface $hand
     * @param GraveYardInterface $graveYard
     */
    public function __construct(
        DeckInterface $deck, HandInterface $hand, GraveYardInterface $graveYard
    );

    /**
     * @return HandInterface
     */
    public function getHand();

    /**
     * @return DeckInterface
     */
    public function getDeck();

    /**
     * @return GraveYardInterface
     */
    public function getGraveYard();
}