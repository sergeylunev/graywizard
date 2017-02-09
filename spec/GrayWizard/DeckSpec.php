<?php

namespace spec\GrayWizard;

use GrayWizard\Deck;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DeckSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Deck::class);
    }

    public function it_should_be_countable($parameters)
    {
        
    }
}
