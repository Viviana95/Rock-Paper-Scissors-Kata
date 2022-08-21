<?php
namespace Tests;

use App\Game;
use App\Models\Player;
use App\Models\Rock;
use PHPUnit\Framework\TestCase;



class GameTest extends TestCase{
    
   /*  public function test_Rock_beats_Scissors()
    {
        //Given
        $playerOne = new Game;
        $playerTwo = new Game;

        $playerOne -> _construct();
        $playerTwo -> _construct();
        //$this->assertEquals("Rock", $playerOne->probar(1,2));
      
       $result=$playerOne && $playerTwo-> probar(1,2);
       $this->assertEquals("Rock Wins",$result);
    } */

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
        $this->assertEquals("Rock Wins", $winner);
    

}
}