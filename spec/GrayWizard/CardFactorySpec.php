<?php

namespace spec\GrayWizard;

use GrayWizard\CardFactory;
use GrayWizard\Cards\LightningBoltCard;
use GrayWizard\Interfaces\DeckInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CardFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CardFactory::class);
    }

    public function it_should_create_card()
    {
        $this->createCard('LightningBolt')->shouldBeAnInstanceOf(LightningBoltCard::class);
    }

    public function it_should_throw_exception_if_we_dont_have_such_card()
    {
        $this->shouldThrow(\Exception::class)->during('createCard', ['NoSuchCard']);
    }

    public function it_should_check_if_we_can_create_card()
    {
        $this->hasCard('LightningBolt')->shoudlBeBool();
        $this->hasCard('LightningBolt')->shoudlBe(true);
    }

    public function it_should_check_if_we_cant_create_card()
    {
        $this->hasCard('NoSuchCard')->shoudlBeBool();
        $this->hasCard('NoSuchCard')->shoudlBe(false);
    }
}
