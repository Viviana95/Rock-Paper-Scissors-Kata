<?php
namespace App;
class FizzBuzz{
public function isDivisible(int $numb):string
{
    if($numb % 3 === 0 && $numb % 5 === 0){
        return "FizzBuzz";
    }
if($numb % 3 === 0){
    return "Fizz";
}
if($numb % 5 === 0){
    return "Buzz";
}
//return ($numb % 3 === 0 && $numb % 5 === 0? "FizzBuzz");
return $numb;
}
public function isDivisible3(int $numb):string
{
    if($numb.include(3) ){
        return "Fizz";
    }
}
}