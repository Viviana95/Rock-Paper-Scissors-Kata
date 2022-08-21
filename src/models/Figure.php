<?php
namespace App\Models;


abstract class Figure{

    protected $type;

   
/** @test */
public function getType()
{
    // Test
    return $this->type;
}

}