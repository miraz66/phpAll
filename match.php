<?php

// match is a street comparison
$paymentStatus = 3;

$paymentStatusDisplay = match($paymentStatus) {
    1 => "paid", //accepted or value is "1" not converted to number 1. String to string or number to number.
    2 => "payment Delivered",
    3 => "pending payment",

    default => "unknown",
};

echo $paymentStatusDisplay;

