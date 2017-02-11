<?php

namespace spec\GrayWizard;

use GrayWizard\Deck;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DeckSpec extends ObjectBehavior
{
    // Start test tests one by one by removing comments on them
    // And implementing logic for them
    
    // /**
    //  * Technical method
    //  * Constructing object for test
    //  */
     function let()
     {
         $this->beConstructedWith([]);
     }

    // /**
    //  * We need to check, that we can create object
    //  * As constructor is cnahged we need to reimplement this
    //  * 
    //  * In constructor for this class we get array of card names
    //  * Constructor can be empty as in this example
    //  */
     function it_is_initializable()
     {
         $this->shouldHaveType(Deck::class);
     }

    // /**
    //  * Check how much is in deck
    //  * For this example we check that this method returns int
    //  * And for deck with no cards number should be 0
    //  */
     public function it_should_be_countable()
     {
         $this->count()->shouldBeInt();
         $this->count()->shouldBe(0);
     }

    // /**
    //  * If we pass as constructor array with some card name
    //  * Then we have deck with 1 card
    //  */
     public function it_can_be_constructed_with_actual_cards()
     {
         $this->beConstructedWith(['Test']);
         $this->count()->shouldBe(1);
     }

    // /**
    //  * If we whant to construct deck with card we don't have
    //  * Then we throw exception
    //  */
     public function it_throws_exception_if_we_dont_have_such_card()
     {
         $this->beConstructedWith(['WrongName']);
         $this->shouldThrow('\Exception')->duringInstantiation();
     }

    // /**
    //  * Check if we have shuffle method for Deck.
    //  * It shouldn't return anything.
    //  */
     public function it_can_be_shuffled()
     {
         $this->shuffle();
     }

    // /**
    //  * When we draw from deck, we need to recive a Card
    //  * And number of cards in deck should be less then before this
    //  */
    public function can_draw_card_from_deck()
     {
         $this->beConstructedWith(['Test']);

         $this->count()->shouldBe(1);
         $this->draw()->shouldBeAnInstanceOf('GrayWizard\Card');
         $this->count()->shouldBe(0);
    }
}
