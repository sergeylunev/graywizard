<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\FlametongueTotemCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GrayWizard\Interfaces\CardInterface;

class FlametongueTotemCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FlametongueTotemCard::class);
    }
    
    public function it_should_return_this_card_name()
    {
        $this->getType()->shouldBeString();
        $this->getName()->shouldBe('Flametongue Totem');
    }

    public function it_should_retunr_type()
    {
        $this->getType()->shouldBeString();
        $this->getType()->shouldBe(CardInterface::TYPE_CREATURE);
    }
    
    public function it_should_have_manacost()
    {
        $this->getManaCost()->shouldBeInt();
        $this->getManaCost()->shouldBe(2);
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
