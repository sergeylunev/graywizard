<?php

namespace spec\GrayWizard;

use GrayWizard\CardFactory;
use GrayWizard\Cards\TestCard;
use GrayWizard\Deck;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DeckSpec extends ObjectBehavior
{
    /**
     * @var CardFactory
     */
    protected $cardFactory;

    /**
     * Technical method
     * Constructing object for test
     */
    function let()
    {
        $this->cardFactory = new CardFactory();
        $this->beConstructedWith([], $this->cardFactory);
    }

    /**
     * We need to check, that we can create object
     * As constructor is cnahged we need to reimplement this
     * 
     * In constructor for this class we get array of card names
     * Constructor can be empty as in this example
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(Deck::class);
    }

    /**
     * Check how much is in deck
     * For this example we check that this method returns int
     * And for deck with no cards number should be 0
     */
    public function it_should_be_countable()
    {
        $this->count()->shouldBeInt();
        $this->count()->shouldBe(0);
    }

    /**
     * If we pass as constructor array with some card name
     * Then we have deck with 1 card
     */
    public function it_can_be_constructed_with_actual_cards()
    {
        $this->beConstructedWith(
            ['Test', 'Test', 'Coin', 'Coin', 'LightningBolt', 'LightningBolt', 'PatchesThePirate'],
            $this->cardFactory
        );
        $this->count()->shouldBe(7);
    }

    /**
     * We can only add 2 copies of common card to the deck. 
     * If we add more then we throw an exception
     */
    public function it_can_not_have_more_then_two_copies_of_commons()
    {
        $this->beConstructedWith(
            ['Coin', 'Coin', 'Coin'],
            $this->cardFactory
        );
        $this->shouldThrow('\Exception')->duringInstantiation();
    }

    /**
     * We can only add 1 copy of rare card to the deck.
     * If we add more we throw an exception
     */
    public function it_can_not_have_more_then_one_cpoy_of_rare()
    {
        $this->beConstructedWith(
            ['PatchesThePirate', 'PatchesThePirate'],
            $this->cardFactory
        );
        $this->shouldThrow('\Exception')->duringInstantiation();
    }

    /**
     * If we whant to construct deck with card we don't have
     * Then we throw exception
     */
     public function it_throws_exception_if_we_dont_have_such_card()
    {
        $this->beConstructedWith(
            ['WrongName'],
            $this->cardFactory
        );
        $this->shouldThrow('\Exception')->duringInstantiation();
    }

    /**
     * Check if we have shuffle method for Deck.
     * It shouldn't return anything.
     */
    public function it_can_be_shuffled()
    {
        $this->shuffle();
    }

    /**
     * When we draw from deck, we need to recive a Card
     * And number of cards in deck should be less then before this
     */
    public function it_can_draw_card_from_deck()
    {
        $this->beConstructedWith(['Test'], $this->cardFactory);

        $this->count()->shouldBe(1);
        $this->draw()->shouldBeAnInstanceOf(TestCard::class);
        $this->count()->shouldBe(0);
    }
}
