<?php
namespace App\Models;

class Player{
   private $figure;
   /** @test */
   public function getFigure()
   {
    return $this->figure;
   }
   

    public function chose(string $figure){
       if( $figure == "Rock"){
        $this->figure = new Rock;
       }
       if( $figure == "Scissors"){
        $this->figure = new Scissors;
       }
       if( $figure == "Paper"){
         $this->figure = new Paper;
        }
    }


}