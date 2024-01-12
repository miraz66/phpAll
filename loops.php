<?php

/* Loops */

// ----------------------------------------------------------------
// While
// $i = 0;
// while ($i <= 10) { 
//     echo $i++;
// }

// ----------------------------------------------------------------
// Do-While
// $i = 7;
// do {
//     echo $i++;
// } while ($i <= 10);

// ----------------------------------------------------------------
// For
// for($i=0; $i <= 15; $i++) {
//     echo $i;
// }

// ----------------------------------------------------------------
// ForEach
// $programmingLanguages = [1 => "php", 2 => "python", 3 => "java", 4 => "JavaScript", 5 => "ruby"];
// $programmingLanguages = ["php", "python",  "java", "JavaScript",  "ruby"];

// foreach($programmingLanguages as $key => $language) {
//     echo $language . " " . $key . "\n";
// }

// foreach($programmingLanguages as $key => &$language) {
//     echo $language . " = " . $key . "\n";
// }

// $language = "C++";

// print_r($programmingLanguages);

$users = [
    'name' => 'Miraz',
    'email'=> 'miraz@miraz.com',
    'skills'=> ["php", "python",  "java", "JavaScript",  "ruby"],
];

// foreach($users as $key => $value) {
//     echo $key . ': ' . json_encode($value) . "\n"; // print for skills all array not print values.
// }

// foreach($users as $key => $value) {
//     if( is_array($value) ) {
//         $value = implode(",", $value);
//     }
//     echo $key . ': ' . $value . "\n"; // print for skills all array values.
// }

foreach($users as $key => $value) {
    echo $key . " : " ;

    if( is_array($value) ) {
        foreach($value as $skills) { 
            echo $skills . ",";
        }
    } else { echo $value . "\n";}
}