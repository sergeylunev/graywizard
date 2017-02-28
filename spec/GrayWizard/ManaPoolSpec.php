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
}
