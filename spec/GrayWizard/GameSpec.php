<?php

namespace spec\GrayWizard;

use GrayWizard\Game;
use GrayWizard\PlayerInterface;
use PhpSpec\ObjectBehavior;

class GameSpec extends ObjectBehavior
{
    public function let($player1, $player2)
    {
        $player1->beADoubleOf(PlayerInterface::class);
        $player2->beADoubleOf(PlayerInterface::class);

        $this->beConstructedWith(
            $player1, $player2
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Game::class);
    }

    public function it_should_return_status()
    {
        $this->getStatus()->shouldBeString();
    }

    public function it_can_be_started()
    {
        $this->start();
        $this->getStatus()->shouldReturn(Game::STARTED);
    }

    public function it_should_return_current_turn_count()
    {
        $this->getCurrentTurn()->shouldBeInt();
    }

    public function correct_turn_count_after_game_start()
    {
        $this->start();
        $this->getCurrentTurn()->shouldReturn(1);
    }

    public function it_shoudl_pass_the_turn_only_if_game_started()
    {
        $this->shouldThrow('\Exception')->during('passTurn');
    }

    public function it_should_pass_the_turn()
    {
        $this->start();
        $this->passTurn();
        $this->getCurrentTurn()->shouldReturn(2);
    }

    public function it_should_have_two_players()
    {
        $this->getFirstPlayer()->shouldReturnAnInstanceOf(PlayerInterface::class);
        $this->getSecondPlayer()->shouldReturnAnInstanceOf(PlayerInterface::class);
    }
}
