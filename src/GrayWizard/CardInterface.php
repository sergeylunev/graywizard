<?php

namespace GrayWizard;

interface CardInterface
{
    /**
     * Getting name of a Card
     * @return string
     */
    public function getName();

    /**
     * Get type of a Card
     * @return string
     */
    public function getType();

    /**
     * Get manacost of card
     * @return int
     */
    public function getManaCost();
}
