<?php
namespace App;

use PhpParser\Builder\Function_;

class Game{


    public function invento($playerOne, $playerTwo)
     {
       $this->rock = "rock";
       $this->scissors = "scissors"; 
    }

   public function getRock()
{
    return $this->rock;
}

   public function getscissors()
{
   return $this->scissors;
}
public function setRock($rock)
{
    $this->rock = $rock;
    return $this;
}
public function setScissors($scissors)
{
    $this->scissors = $scissors;
    return $this;
} 

  
public function start($playerOne,$playerTwo)
   {
if($playerOne->getFigure()->gettype() == "Rock" && $playerTwo->getFigure()->gettype() == "Scissors"){
  return "Rock Wins";}
}
   


}