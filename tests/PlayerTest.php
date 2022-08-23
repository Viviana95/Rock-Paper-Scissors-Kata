<?php

namespace Tests;

use App\Models\Player;
use App\Models\Rock;
use App\Models\Scissors;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /** @test */
    public function test_player_choose_rock()
    {
        $player = new Player;
        $rock = new Rock;
        
        $player->choose("Rock");

        $this->assertEquals($rock, $player->getFigure());
    }

    /** @test */
    public function test_player_choose_scissors()
    {
        $player = new Player;
        $scissors = new Scissors;

        $player->choose("Scissors");

        $this->assertEquals($scissors, $player->getFigure());
    }
    /** @test */
    public function test_player_choose_paper()
    {
        $player = new Player;
        $paper = new Paper;
        $player->choose("Paper");
        $this->assertEquals($paper, $player->getFigure())
    }
    
    


    
}