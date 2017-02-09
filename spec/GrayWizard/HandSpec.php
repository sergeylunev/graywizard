<?php

namespace spec\GrayWizard;

use GrayWizard\Hand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Hand::class);
    }

    public function it_should_be_countable($parameters)
    {
        
    }
}
