<?php

namespace spec\GrayWizard;

use GrayWizard\DeckInterface;
use GrayWizard\GraveYardInterface;
use GrayWizard\HandInterface;
use GrayWizard\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    public function let($deck, $hand, $graveyard)
    {
        $deck->beADoubleOf(DeckInterface::class);
        $hand->beADoubleOf(HandInterface::class);
        $graveyard->beADoubleOf(GraveYardInterface::class);
        $this->beConstructedWith($deck, $hand, $graveyard);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Player::class);
    }

    public function it_should_have_hand()
    {
        $this->getHand()->shouldBeAnInstanceOf(HandInterface::class);
    }

    public function it_should_have_deck()
    {
        $this->getDeck()->shouldBeAnInstanceOf(DeckInterface::class);
    }

    public function it_should_have_graveyard()
    {
        $this->getGraveYard()->shouldBeAnInstanceOf(GraveYardInterface::class);
    }
}
