<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\TunnelTroggCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GrayWizard\CardInterface;

class TunnelTroggCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TunnelTroggCard::class);
    }
    
    public function it_should_return_this_card_name()
    {
        $this->getType()->shouldBeString();
        $this->getName()->shouldBe('Tunnel Trogg');
    }

    public function it_should_retunr_type()
    {
        $this->getType()->shouldBeString();
        $this->getType()->shouldBe(CardInterface::TYPE_CREATURE);
    }

    public function it_should_have_manacost()
    {
        $this->getManaCost()->shouldBeInt();
        $this->getManaCost()->shouldBe(1);
    }

    public function it_should_have_rarity()
    {
        $this->getRarity()->shouldBeString();
        $this->getRarity()->shouldBe(CardInterface::RARITY_COMMON);
    }

    public function it_should_be_common_card()
    {
        $this->isRare()->shouldBeBoolean();
        $this->isRare()->shouldBe(false);
    }
}
