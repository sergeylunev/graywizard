<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\TotemGolemCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TotemGolemCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TotemGolemCard::class);
    }
}
