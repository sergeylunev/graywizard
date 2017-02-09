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
}
