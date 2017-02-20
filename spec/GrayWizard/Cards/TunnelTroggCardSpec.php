<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\TunnelTroggCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TunnelTroggCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TunnelTroggCard::class);
    }
}
