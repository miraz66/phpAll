<?php
// Working file system

// $dir = scandir(__DIR__);

// var_dump(is_file($dir[2]));

// if(file_exists('foo.txt')) {
//     echo filesize('foo.txt');

//     file_put_contents('foo.txt', 'hello world');
//     clearstatcache(); 

//     echo filesize('foo.txt');
// } else { echo 'file not found ';}

// $file = fopen('foo.txt', 'r');

// var_dump($file);

// while ($line = fgets($file) !== false) {
//     print_r($line);
// }

$content = file_get_contents('foo.txt');

if(file_get_contents('foo.txt') === false) {
    echo 'File Found';
}