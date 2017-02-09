<?php

namespace spec\GrayWizard;

use GrayWizard\GraveYard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GraveYardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GraveYard::class);
    }

    public function it_should_be_countable($parameters)
    {
        
    }
}
