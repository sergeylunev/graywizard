<?php

namespace GrayWizard\Cards;

use GrayWizard\Interfaces\CardInterface;

class TestCard extends AbstractCard implements CardInterface
{
    protected $type = 'Test';
    protected $name = 'Test';
    protected $manaCost = 0;
}
