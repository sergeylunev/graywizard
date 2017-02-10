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
        $this->getType()->shouldBeString();
        $this->getName()->shouldBe('Test');
    }

    public function it_should_retunr_type()
    {
        $this->getType()->shouldBeString();
        $this->getType()->shouldBe('Test');
    }

    public function it_should_have_manacost()
    {
        $this->getManaCost()->shouldBeInt();
        $this->getManaCost()->shouldBe(0);
    }
}
