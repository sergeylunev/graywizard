<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\JadeLightningCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JadeLightningCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(JadeLightningCard::class);
    }
}
