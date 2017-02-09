<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\TestCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TestCard::class);
    }

    public function it_should_return_this_card_name()
    {
        $this->getName()->shouldBe('Test');
    }
}
