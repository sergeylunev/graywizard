<?php

namespace spec\GrayWizard;

use GrayWizard\CardFactory;
use GrayWizard\Cards;
use GrayWizard\Hand;
use PhpSpec\ObjectBehavior;

class HandSpec extends ObjectBehavior
{
    /**
     * @var CardFactory
     */
    protected $cardFactory;

    public function let()
    {
        $this->cardFactory = new CardFactory();
        $this->beConstructedWith([], $this->cardFactory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Hand::class);
    }

    public function it_should_be_countable()
    {
        $this->count()->shouldBeInt();
    }

    public function it_should_have_maximum_size()
    {
        $this->getMaximumSize()->shouldBeInt();
        $this->getMaximumSize()->shouldBe(10);
    }

    public function it_should_add_cards_to_hand()
    {
        $this->addCard('LightningBolt');
        $this->count()->shouldBe(1);
    }

    public function it_should_not_be_abble_add_more_card_than_maximum_hand_size($card)
    {
        for ($i = 0; $i < 11; $i++) {
            $this->addCard('LightningBolt');
        }

        $this->count()->shouldBe(10);
    }

    public function it_can_get_list_of_cards_in_hand()
    {
        $cards = ['Coin', 'Coin', 'Coin'];
        $this->beConstructedWith($cards, $this->cardFactory);

        $this->count()->shouldBe(3);
        $this->getCards()->shouldBeArray();
        $this->getCards()->shouldBe($cards);
    }

    public function it_should_have_ability_to_play_card()
    {
        $cards = ['LightningBolt', 'PatchesThePirate', 'Coin'];

        $this->beConstructedWith($cards, $this->cardFactory);
        $this->count()->shouldBe(3);
        $this->play('Coin')->shouldBeAnInstanceOf(Cards\CoinCard::class);
        $this->count()->shouldBe(2);
    }

    public function it_throw_exception_if_we_try_to_play_card_that_not_in_hand()
    {
        $cardToPlay = 'LightningBolt';
        $cards = ['Coin', 'Coin', 'Coin'];

        $this->beConstructedWith($cards, $this->cardFactory);
        $this->shouldThrow('\Exception')->during('play', [$cardToPlay]);
    }

    public function it_throw_exception_if_we_try_to_play_card_with_empty_hand()
    {
        $cardToPlay = 'LightningBolt';
        $this->shouldThrow('\Exception')->during('play', [$cardToPlay]);
    }
}
