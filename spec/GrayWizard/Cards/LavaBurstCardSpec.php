<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\LavaBurstCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LavaBurstCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LavaBurstCard::class);
    }
}
