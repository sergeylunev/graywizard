<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\BloodmageThalnosCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GrayWizard\CardInterface;

class BloodmageThalnosCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BloodmageThalnosCard::class);
    }
    
    public function it_should_return_this_card_name()
    {
        $this->getType()->shouldBeString();
        $this->getName()->shouldBe('Bloodmage Thalnos');
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
        $this->getRarity()->shouldBe(CardInterface::RARITY_RARE);
    }
    
    public function it_should_be_common_card()
    {
        $this->isRare()->shouldBeBoolean();
        $this->isRare()->shouldBe(true);
    }
}
