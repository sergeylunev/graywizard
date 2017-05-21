<?php

namespace GrayWizard\Interfaces;

interface HandInterface
{
    /**
     * Max cards in hand allowed
     */
    const MAX_SIZE = 10;

    /**
     * HandInterface constructor.
     * @param array $cards
     * @param CardFactoryInterface $cardFactory
     */
    public function __construct(array $cards = [], CardFactoryInterface $cardFactory);

    /**
     * @return integer
     */
    public function getMaximumSize();

    /**
     * @param CardInterface $card
     */
    public function addCard($card);

    /**
     * @return integer
     */
    public function count();

    /**
     * @return CardInterface[]
     */
    public function getCards();

    /**
     * @param CardInterface $cardToPlay
     * @return mixed
     */
    public function play($cardToPlay);
}