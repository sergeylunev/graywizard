<?php

namespace spec\GrayWizard;

use GrayWizard\Hand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GrayWizard\Cards;

class HandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Hand::class);
    }

    public function it_should_be_countable($parameters)
    {
        $this->count()->shouldBeInt();
    }

    public function it_should_have_maximum_size()
    {
        $this->getMaximumSize()->shouldBeInt();
        $this->getMaximumSize()->shouldBe(10);
    }

    public function it_should_add_cards_to_hand($card)
    {
        $card->beADoubleOf('GrayWizard\CardInterface');
        $this->addCard($card);
        $this->count()->shouldBe(1);
    }

    public function it_should_not_be_abble_add_more_card_than_maximum_hand_size($card)
    {
        $card->beADoubleOf('GrayWizard\CardInterface');

        for ($i=0; $i < 11; $i++) { 
            $this->addCard($card);
        }

        $this->count()->shouldBe(10);
    }

    public function it_can_get_list_of_cards_in_hand()
    {
        $cards = [
            new Cards\CoinCard(),
            new Cards\CoinCard(),
            new Cards\CoinCard(),
        ];

        $this->beConstructedWith($cards);

        $this->getCards()->shouldBeArray();
        $this->getCards()->shouldBe($cards);
    }
}
