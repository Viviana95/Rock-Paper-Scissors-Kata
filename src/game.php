<?php

namespace App;

use App\Models\Rock;

class Game {
    
    public function start($player1, $player2) : string
    {
        if (($player1->getFigure()->getType() == "Rock" && $player2->getFigure()->getType() == "Scissors") ||
        ($player1->getFigure()->getType()=="Scissors" && $player2->getFigure()->getType()=="Paper") ||
        ($player1->getFigure()->getType()=="Paper" && $player2->getFigure()->getType()=="Rock"))
        {
            return "Player 1 wins";
        }
        if (($player1->getFigure()->getType() == "Scissors" && $player2->getFigure()->getType() == "Rock")||
        ($player1->getFigure()->getType()=="Paper" && $player2->getFigure()->getType()=="Scissors")||
        ($player1->getFigure()->getType()=="Rock" && $player2->getFigure()->getType()=="Paper"))
        {
            return "Player 2 wins";
        }
      
        if(($player1->getFigure()->getType()=="Rock" && $player2->getFigure()->getType()=="Rock")||
        ($player1->getFigure()->getType()=="Scissors" && $player2->getFigure()->getType()=="Scissors")||
        ($player1->getFigure()->getType()=="Paper" && $player2->getFigure()->getType()=="Paper")){
            return "Draw";
        }


    }

}