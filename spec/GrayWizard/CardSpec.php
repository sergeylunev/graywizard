<?php

namespace spec\GrayWizard;

use GrayWizard\Card;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Card::class);
    }

    public function it_should_have_name()
    {
        $this->getName()->shouldBeString();
    }
}
