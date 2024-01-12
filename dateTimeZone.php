<?php

// Date and time
$currentTime = time();

echo $currentTime + 5 * 24 * 60 * 60 . "\n";

echo date("Y-m-d g:i:sa",$currentTime + 5 * 24 * 60 * 60) . "\n";

$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
echo $dt->format('F j, Y, g:ia') . "\n";

echo date('m/d/M g:ia', strtotime('first day of february 2023')); // custom date and time set