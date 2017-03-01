<?php

namespace spec\GrayWizard;

use GrayWizard\BatleField;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BatleFieldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BatleField::class);
    }
}
