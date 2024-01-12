<?php

declare(strict_types=1);

// function foo(int|float &$x, int|float $y):int | float {
//     if($x % 2 === 0) {
//         $x/= 2;
//     }elseif($x % 2 === 1) {
//         echo "Please";
//     }
//     return $x * $y;
// }
// $a = 6.0;
// $b = 7;


// echo foo($a, $b) . "\n";

// var_dump($a, $b);

// function sum(int | float $x, int | float $y , int| float ...$number):int | float {
//     return $x + $y + array_sum($number);
// }

// $a = 6.0;
// $b = 7;
// $numbers = [ 10,30,400.23,70 ];

// echo sum($a, $b, ...$numbers);


// ----------------------------------------------------------------
// variable, anonymous and arrow functions

// ----------------------------------------------------------------
// Variable functions
// function sum(int | float ...$numbers):int | float {
//     return array_sum($numbers);
// }

// $x = 'sum';

// echo $x(10,30,50,20);

// ----------------------------------------------------------------
// arrow functions

$array = [1,2,3,4];

// $array2 = array_map(function($number) {  // at first counting 1 * 1 = 1 and 2 * 2 = 4 and etc.
//     return $number *  $number;
// }, $array);

$array2 = array_map(fn($number) =>   // at first counting 1 * 1 = 1 and 2 * 2 = 4 and etc.
     $number *  $number, $array);

print_r($array2);