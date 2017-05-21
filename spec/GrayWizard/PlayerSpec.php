<?php

namespace spec\GrayWizard;

use GrayWizard\Interfaces\DeckInterface;
use GrayWizard\Interfaces\GraveYardInterface;
use GrayWizard\Interfaces\HandInterface;
use GrayWizard\Interfaces\ManaPoolInterface;
use GrayWizard\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    public function let(
        DeckInterface $deck,
        HandInterface $hand,
        GraveYardInterface $graveyard,
        ManaPoolInterface $manaPool)
    {
        $this->beConstructedWith($deck, $hand, $graveyard, $manaPool);
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

    public function it_should_have_mana_pool()
    {
        $this->getManaPool()->shouldBeAnInstanceOf(ManaPoolInterface::class);
    }
}
