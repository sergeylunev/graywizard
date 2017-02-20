<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\SirFinleyMrrggltonCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SirFinleyMrrggltonCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SirFinleyMrrggltonCard::class);
    }
}
