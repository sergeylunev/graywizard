<?php

namespace spec\GrayWizard\Permanents;

use GrayWizard\Permanents\Land;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(['R']);
        $this->shouldHaveType(Land::class);
    }
}
