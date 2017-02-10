<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class TestCard extends AbstractCard implements CardInterface
{
    protected $type = 'Test';
    protected $name = 'Test';
    protected $manaCost = 0;
}
