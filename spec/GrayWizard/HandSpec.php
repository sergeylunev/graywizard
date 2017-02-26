<?php

namespace spec\GrayWizard;

use GrayWizard\Cards;
use GrayWizard\Hand;
use PhpSpec\ObjectBehavior;

class HandSpec extends ObjectBehavior
{
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

    public function it_should_add_cards_to_hand($card)
    {
        $card->beADoubleOf('GrayWizard\CardInterface');
        $this->addCard($card);
        $this->count()->shouldBe(1);
    }

    public function it_should_not_be_abble_add_more_card_than_maximum_hand_size($card)
    {
        $card->beADoubleOf('GrayWizard\CardInterface');

        for ($i = 0; $i < 11; $i++) {
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

        $this->count()->shouldBe(3);
        $this->getCards()->shouldBeArray();
        $this->getCards()->shouldBe($cards);
    }

    public function it_should_have_ability_to_play_card()
    {
        $cardToPlay = new Cards\CoinCard();

        $cards = [
            new Cards\LightningBoltCard(),
            new Cards\PatchesThePirateCard(),
            $cardToPlay,
        ];

        $this->beConstructedWith($cards);
        $this->count()->shouldBe(3);
        $this->play($cardToPlay)->shouldBe($cardToPlay);
        $this->count()->shouldBe(2);
    }

    public function it_throw_exception_if_we_try_to_play_card_that_not_in_hand()
    {
        $cardToPlay = new Cards\LightningBoltCard();

        $cards = [
            new Cards\CoinCard(),
            new Cards\CoinCard(),
            new Cards\CoinCard(),
        ];

        $this->beConstructedWith($cards);
        $this->shouldThrow('\Exception')->during('play', [$cardToPlay]);
    }

    public function it_throw_exception_if_we_try_to_play_card_with_empty_hand()
    {
        $cardToPlay = new Cards\LightningBoltCard();
        $this->shouldThrow('\Exception')->during('play', [$cardToPlay]);
    }
}
