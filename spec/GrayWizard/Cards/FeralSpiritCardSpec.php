<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\FeralSpiritCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GrayWizard\Interfaces\CardInterface;

class FeralSpiritCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FeralSpiritCard::class);
    }
    
    public function it_should_return_this_card_name()
    {
        $this->getType()->shouldBeString();
        $this->getName()->shouldBe('Feral Spirit');
    }

    public function it_should_retunr_type()
    {
        $this->getType()->shouldBeString();
        $this->getType()->shouldBe(CardInterface::TYPE_SPELL);
    }
    
    public function it_should_have_manacost()
    {
        $this->getManaCost()->shouldBeInt();
        $this->getManaCost()->shouldBe(3);
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
