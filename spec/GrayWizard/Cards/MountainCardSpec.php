<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\MountainCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MountainCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MountainCard::class);
    }

    public function it_should_retunr_right_name()
    {
        $this->getName()->shouldBe('Mountain');
    }

    public function it_should_create_land_permanent()
    {
        $this->create()->shouldBeAnInstanceOf('GrayWizard\Permanents\Land');
    }
}
