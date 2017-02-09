<?php

namespace spec\GrayWizard;

use GrayWizard\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Player::class);
    }

    public function it_should_have_hand()
    {

    }

    public function it_should_have_deck()
    {
        
    }

    public function it_should_have_graveyard()
    {
        
    }
}
