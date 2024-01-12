<?php 
$payment = 'rejected'; // any value set as string,number,bull any value.

switch ($payment) { 
    case 'paid': //accepted or value is "1" converted to number 1.
        echo 'payment paid';
        break;

    case 'declined':
    case 'rejected':
        echo 'payment declined';
        break;

    case 'pending':
        echo 'pending payment';
        break;

    default:
        echo 'unknown payment status';
}