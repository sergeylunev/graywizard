<?php

namespace GrayWizard\Cards;

use GrayWizard\CardInterface;

class TestCard implements CardInterface
{
    public function getName()
    {
        return 'Test';
    }
}
