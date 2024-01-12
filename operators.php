<?php 
/* Operators */
 $x = 10;
 $y = 3;

 //---------------------------------------------------------------
// Arithmetic operators (+, -, *, /, %, and **)
// echo $x ** $y;

//---------------------------------------------------------------
// Assignments operators (=, +=, -=, *=, /=, %=, and **=)
// $z = ($x = 20) + 10;
// echo $z , $x;
// $x += 10;
// $x **= 2; // (10 * 10) = 100
// $x /= 2; // (10 / 2) = 5
// $x %= 3 ; // (10 % 3) = 1
// echo $x;

//---------------------------------------------------------------
// Strings operators (. and .= )
// $x = 'Hello';
// $x .= ' World';
// echo $x;

//---------------------------------------------------------------
// Comparison operators (==, ===,!=, !== <=, >=, <>, <=>, ??, ?:)
// var_dump($x <=> $y);  // Print comparison $x = 5 and $y = 10 ans -1 , $x = 10 and $y = 2 ans 1 , $x = 10 and $y = 10 ans 0
// $x ='Hello world';
// $y = strpos($x, 'H');
// if ($y === false) {
//     echo "H Not Found";
// } else { echo"H Found at index " . $y; }
// $result = $y === false ? "H Not Found" : "H Found " . $y;
// echo $result;
// $z = $m ?? "hello world";
// echo $z;

//---------------------------------------------------------------
// Error control operators (@)
// $z = @file(foo.txt)

//---------------------------------------------------------------
// Increment operators / Decrement operators (++, --)
// $z = 5;
// $z++; // Post increment operator
// $z--; // Post decrement operator
// ++$z; // pre increment operator
// --$z; // pre decrement operator
// echo $z;

// Logical operators (&&, ||, and, or, xor)
// $x = true;
// $y = false;
// $z = $x or $y;
// var_dump($z);

// Bitwise operators (&, |, ^, ~, <<, >>)
// $x = 6;
// $y = 3;

//110
//& 
//011
//010 = 2
// var_dump($x & $y); // set value to 1 & 1 = 1 and 0 & 1 = 0
// var_dump($x | $y); // set value to 0 | 1 = 1 and 0 | 0 = 0 and 1 | 1 = 1
// var_dump($x ^ $y); // set value to 0 ^ 1 = 1 and 0 ^ 1 = 1 and 1 ^ 1 = 0

//110
//~
//001
//&
//011
//001 = 1
// var_dump(~$x & $y);

//110
//<<
//110000
// var_dump($x << $y); // returns the number of bits if operator = >>, x = 6, y = 3 so x + 000 if y = 2 so x + 00 , ans x = 110 + 000 = 110000

//110
//>>
//0
// var_dump($x << $y);  // returns the number of bits if operator = <<, x = 6, y = 3 so x - 000 if y = 2 so x - 00 , ans x = 0

//----------------------------------------------------------------
// Array operations (+, ==, ===, !=, !==, <>)
// $x = ['a', 'b', 'c'];
// $y = ['d', 'e', 'f', 'g', 'h'];

// $z = $x + $y;
// var_dump($z); // ans [a,b,c,f,g] because array keys same so ans [a,b,c,f,g]

// $x = ['a' => 1, 'b' => 2, 'c' => 3,];
// $y = ['d' => 3, 'e' => 4, 'f' => 5, 'g' => 6, 'h' => 7];

// $z = $x + $y;
// var_dump($z); // ans [a,b,c,f,g] because array keys not mas so ans [a,b,c,d,e,f,g]

//---------------------------------------------------------------
// Execution operators (``)

//---------------------------------------------------------------
// Type Operations (instanceof)

//---------------------------------------------------------------
// Nullsafe operations - PHP8 (?)