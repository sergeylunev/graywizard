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
        $this->getHand()->shouldBeAnInstanceOf('GrayWizard\Hand');
    }

    public function it_should_have_deck()
    {
        $this->getDeck()->shouldBeAnInstanceOf('GrayWizard\Deck');
    }

    public function it_should_have_graveyard()
    {
        $this->getGraveYard()->shouldBeAnInstanceOf('GrayWizard\GraveYard');
    }
}
