<?php
namespace App;

use PhpParser\Builder\Function_;

class Game{

  
public function start($playerOne,$playerTwo)
   {
if($playerOne->getFigure()->gettype() == "Rock" && $playerTwo->getFigure()->gettype() == "Scissors"){
  return "Player_1 Wins";}

if($playerOne->getFigure()->gettype() == "Scissors" && $playerTwo->getFigure()->gettype() == "Rock"){
   return "Player_2 Wins";}

 if($playerOne->getFigure()->gettype() == "Scissors" && $playerTwo->getFigure()->gettype() == "Paper"){
   return "Player_1 Wins";}
 
 if($playerOne->getFigure()->gettype() == "Paper" && $playerTwo->getFigure()->gettype() == "Scissors"){
   return "Player_1 Wins";}
 
 if($playerOne->getFigure()->gettype() == "Paper" && $playerTwo->getFigure()->gettype() == "Rock"){
   return "Player_1 Wins";}
 
 if($playerOne->getFigure()->gettype() == "Rock" && $playerTwo->getFigure()->gettype() == "Paper"){
   return "Player_2 Wins";}
 if($playerOne->getFigure()->gettype() == "Rock" && $playerTwo->getFigure()->gettype() == "Rock"){
   return "Draw Game";}
 }
   

}