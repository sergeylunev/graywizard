<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\SouthseaDeckhandCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SouthseaDeckhandCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SouthseaDeckhandCard::class);
    }
}
