<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\JadeClawsCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JadeClawsCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(JadeClawsCard::class);
    }
}
