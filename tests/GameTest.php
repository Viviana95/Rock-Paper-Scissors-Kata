<?php
namespace Tests;

use App\Game;
use App\Models\Player;
use App\Models\Rock;
use PHPUnit\Framework\TestCase;



class GameTest extends TestCase{
    
    /** @test */
    public function test_Rock_beats_Scissors()
    {
        // Given
        $game = new Game;
        $playerOne = new Player;
        $playerTwo = new Player;

        $playerOne->chose("Rock");
        $playerTwo->chose("Scissors");

       $winner= $game->start($playerOne, $playerTwo);
        $this->assertEquals("Player_1 Wins", $winner);
    }
    public function test_Rock_beats_Scissors_Player2()
    {
        // Given
        $game = new Game;
        $playerOne = new Player;
        $playerTwo = new Player;

        $playerOne->chose("Scissors");
        $playerTwo->chose("Rock");

       $winner= $game->start($playerOne, $playerTwo);
        $this->assertEquals("Player_2 Wins", $winner);
    }
}