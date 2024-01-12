<?php

// ARRAY
/*$programmingLanguages = ['php', 'java', 'python']; // Simple Array
$programmingLanguagesForKey = [  // Key for Array
    "php" => 8.1,
    "java" => 8.2,
    "python" => 8.3,
];
$multipleArray = ["php" => [
    "creator"=> "Rasmus Lerdorf",
    "extension"=>"php",
    "website"=> "www.php.net",
    "isOpenSource"=> "true",
    "versions"=> [
        ['version' => 8, "release"=> "Nov 26, 2020",],
        ["version7" => 7.3, "release7"=> "Nov 26, 2019"]
    ],
],
];

$array = ["a", "b", 53 => "c", "d", "e", "f",];

$programmingLanguages[] = 'C++';
$programmingLanguagesForKey["Go"] = '1.3';
array_push($programmingLanguages,'C', 'Rube', 'Go'); // another Options for array creation

unset($array[53]); // Any array removal for use unset

print_r($programmingLanguages);
print_r($programmingLanguagesForKey);
print_r($array); // the print value 0=a 1=2 and 53=c or 54=d etc

echo count($programmingLanguages);
echo count($programmingLanguagesForKey);
echo $programmingLanguagesForKey["php"];
echo $multipleArray["php"]['versions'][1]['release7']; */



// ----------------------------------------------------------------
//array_chunk(array $array, int $length, bool $preserveKeys= true) : array

// $item = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6];

// print_r(array_chunk($item, 2, true));


// $array1 = ['a', 'b', 'c', 'd', 'e'];
// $array2 = [1, 2, 3, 4, 5];
// print_r(array_combine($array1, $array2)); 

// $array = [1, 2, 3, 4, 5,6, 7, 8, 9, 10, 11, 12, 13, 14];
// $even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);
// print_r($even);

// $array = [1, 2, 3, 4, 5, false, 0, 9, 8.0, 0.1, 20]; 
// $even = array_filter($array); // first to last arranged array for array filtering
// print_r($even);

// $array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5,];
// $keys = array_keys($array, 2);
// print_r($keys);

// $array = [1, 2, 3, 4, 5, 6, 7, 8];
// $array = array_map(fn($num) => $num * 3, $array);
// print_r($array);

// $array = ['a' => 1, 'b' => 2, 'c' => 3];
// $array1 = ['d' => 4, 'e' => 5, 'f' => 6];

// $even = array_map(fn($num, $num2) => $num + $num2, $array,$array1);
// print_r($even);

// $array1 = [1, 2, 3];
// $array2 = [4, 5, 6];
// $array3 = [7,8,9];

// $merged = array_merge($array1, $array2, $array3);
// print_r($merged);

// $invoiceItems = [
//     ['price' => 9.99, 'qty' =>3,'desc'=> 'Item 1'],
//     ['price'=> 29.99, 'qty'=> 1,'desc'=> 'Item 2'],
//     ['price'=> 149, 'qty'=> 2,'desc'=> 'Item 3'],
//     ['price'=> 150, 'qty'=> 1,'desc'=> 'Item 4'],
//     ['price'=> 15.1, 'qty'=> 3,'desc'=> 'Item 5'],
//     ['price'=> 16.1, 'qty'=> 3,'desc'=> 'Item 6'],
// ];
// $total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price']);
// print_r($total);
// echo $total;

// $array =['a','b','c','D','ef','f','gr','hk','i','j'];
// $key = array_search('D', $array);
// print_r($key);

// $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
// $array2 = ['b' => 6, 'a' => 7, 'h' => 8];
// $array3 = ['l' => 9, 'b' => 10, 'n' => 11];
// $diff = array_diff($array1, $array2, $array3);
// $diffAssoc = array_diff_assoc($array1, $array2, $array3);
// print_r($diff);
// print_r($diffAssoc);

// $array = ['a' => 1, 'b' => 10, 'c' => 30, 'd' => 4, 'e' => 5, 'f' => 9, 'g' => 7];
// print_r($array);
// asort($array);
// print_r($array);
// ksort($array);
// print_r($array);

