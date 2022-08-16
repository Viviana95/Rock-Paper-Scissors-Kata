<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    public function test_is_divisible_by_3_and_return_Fizz()
    {
        $fizzBuzz = new FizzBuzz; //given
        $result = $fizzBuzz -> isDivisible(3);
$this->assertEquals("Fizz",$result);
    }
    public function test_is_divisible_by_5_and_return_Buzz()
    {
        $fizzBuzz = new FizzBuzz; //given
        $result = $fizzBuzz -> isDivisible(5);
$this->assertEquals("Buzz",$result);
    }
    public function test_is_divisible_by_5_and_return_FizzBuzz()
    {
        $fizzBuzz = new FizzBuzz; //given
        $result = $fizzBuzz -> isDivisible(15);
$this->assertEquals("FizzBuzz",$result);
    }
    public function test_FizzBuzz()
    {
        
        $fizzBuzz = new FizzBuzz; //given
        $numb = 7;
        $result = $fizzBuzz -> isDivisible($numb);
$this->assertEquals($numb,$result);
    }
    public function test_is_divisible_by_3_and_have_return_Fizz()
    {
        $fizzBuzz = new FizzBuzz; //given
       // $result = $fizzBuzz -> isDivisible3(534);
//$this->assertEquals("Fizz",$result);
    }    
}
