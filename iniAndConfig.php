<?php
// error_reporting, error_log, display_errors

// var_dump(ini_get('error_reporting'));
// var_dump(E_ALL);

// $array = [1];
// // ini_set('error_reporting', E_ALL & ~E_WARNING);
// ini_set('display_errors', 0);

// echo $array[3];

var_dump(ini_get('memory_limit'));
ini_set('max_execution_time', 3);
sleep(5);
echo('Hello World!');