<?php

namespace spec\GrayWizard;

use GrayWizard\BattleField;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BattleFieldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BattleField::class);
    }
}
