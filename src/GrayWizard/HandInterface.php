<?php

namespace GrayWizard;

interface HandInterface
{
    /**
     * Max cards in hand allowed
     */
    const MAX_SIZE = 10;

    /**
     * HandInterface constructor.
     * @param array $cards
     */
    public function __construct(array $cards = []);

    /**
     * @return integer
     */
    public function getMaximumSize();

    /**
     * @param CardInterface $card
     */
    public function addCard(CardInterface $card);

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
    public function play(CardInterface $cardToPlay);
}