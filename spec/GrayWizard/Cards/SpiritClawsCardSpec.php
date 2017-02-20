<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\SpiritClawsCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpiritClawsCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SpiritClawsCard::class);
    }
}
