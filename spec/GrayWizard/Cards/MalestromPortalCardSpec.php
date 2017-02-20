<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\MalestromPortalCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MalestromPortalCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MalestromPortalCard::class);
    }
}
