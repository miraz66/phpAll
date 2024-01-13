<?php
// Classes & objects
require_once('./test/Transactions.php');

// $transaction = new Transactions(100, "hello world");
// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// var_dump($transaction);
// var_dump($transaction->getAmount());

// $amount = (new Transactions(100, "hello world"))
//     ->addTax(8)
//     ->applyDiscount(10)
//     ->getAmount();

$amount1 = (new Transactions(100, " Translation 1"))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();
    
$amount2 = (new Transactions(100, " Translation 2"))
    ->addTax(8)
    ->applyDiscount(15)
    ->getAmount();

var_dump($amount1, $amount2);