<?php

namespace spec\GrayWizard;

use GrayWizard\Interfaces\DeckInterface;
use GrayWizard\Interfaces\GraveYardInterface;
use GrayWizard\Interfaces\HandInterface;
use GrayWizard\Interfaces\PlayerInterface;
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

    public function it_should_have_health()
    {
        $this->getHealth()->shouldBeInt();
        $this->getHealth()->shouldBe(PlayerInterface::MAX_HEALTH);
    }

    public function it_should_remove_health()
    {
        $this->wounds(2)->shouldBe(PlayerInterface::MAX_HEALTH - 2);
    }

    public function it_should_add_health()
    {
        $this->wounds(10);
        $this->getHealth()->shouldBe(PlayerInterface::MAX_HEALTH - 10);
        $this->heal(8);
        $this->getHealth()->shouldBe((PlayerInterface::MAX_HEALTH - 10) + 8);
    }

    public function it_should_not_add_health_more_than_max()
    {
        $this->heal(100);
        $this->getHealth()->shouldBe(PlayerInterface::MAX_HEALTH);
    }

    public function it_should_show_is_player_is_alive()
    {
        $this->isAlive()->shouldBe(true);
    }

    public function it_should_show_that_player_is_dead_if_health_is_below_min()
    {
        $this->wounds(100);
        $this->isAlive()->shouldBe(false);
    }
}
