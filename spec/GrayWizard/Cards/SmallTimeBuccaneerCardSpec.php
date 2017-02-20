<?php

namespace spec\GrayWizard\Cards;

use GrayWizard\Cards\SmallTimeBuccaneerCard;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SmallTimeBuccaneerCardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SmallTimeBuccaneerCard::class);
    }
}
