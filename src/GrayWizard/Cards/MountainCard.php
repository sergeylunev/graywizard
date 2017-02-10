<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;
use GrayWizard\Permanents;

class MountainCard extends AbstractCard implements CardInterface
{
    protected $name = 'Mountain';
    protected $type = 'Land';

    public function create()
    {
        return new Permanents\Land(['R']);
    }
}
