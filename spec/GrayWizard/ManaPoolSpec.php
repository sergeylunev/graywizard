<?php

namespace spec\GrayWizard;

use GrayWizard\ManaPool;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ManaPoolSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ManaPool::class);
    }

    public function it_should_get_active_mana()
    {
        $this->getActiveMana()->shouldBeInteger();
        $this->getActiveMana()->shouldBe(1);
    }

    public function it_should_consume_mana()
    {
        $this->spend(1);
        $this->getActiveMana()->shouldBe(0);
    }

    public function it_should_throw_exception_if_try_to_consume_more_then_available()
    {
        $this->shouldThrow(\Exception::class)->during('spend', [2]);
    }

    public function it_should_check_if_can_spend_amount_of_mana()
    {
        $this->canSpend(1)->shouldBeBoolean();
        $this->canSpend(1)->shouldBe(true);
    }

    public function it_shuld_tell_that_we_cant_spent_mana_if_more_then_active()
    {
        $this->canSpend(2)->shouldBe(false);
    }

    public function it_should_return_number_of_mana_crystals()
    {
        $this->getManaCrystals()->shouldBeInteger();
        $this->getManaCrystals()->shouldBe(1);
    }

    public function it_should_not_change_amount_of_crystals_after_mana_spending()
    {
        $this->spend(1);
        $this->getManaCrystals()->shouldBe(1);
    }

    public function it_should_add_empty_mana_crystals()
    {
        $this->addManaCrystal();
        $this->getActiveMana()->shouldBe(1);
        $this->getManaCrystals()->shouldBe(2);
    }

    public function it_should_not_have_more_than_max_amount_of_crystals()
    {
        for ($i = 0; $i < 9; $i++) {
            $this->addManaCrystal();
        }
        $this->shouldThrow(\Exception::class)->during('addManaCrystal');
    }

    public function it_should_check_if_can_add_more_mana_crystals()
    {
        $this->canAddManaCrystal()->shouldBeBoolean();
        $this->canAddManaCrystal()->shouldBe(true);
    }

    public function it_should_tell_if_we_cant_add_more_mana_crystals()
    {
        for ($i = 0; $i < 9; $i++) {
            $this->addManaCrystal();
        }
        $this->canAddManaCrystal()->shouldBe(false);
    }
}
