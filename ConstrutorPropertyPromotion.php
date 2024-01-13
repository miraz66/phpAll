<?php

declare(strict_types= 1);
class Transaction{
    public function __construct(
        private float $amount, 
        private ?string $description = null
        ) {}

    public function addTax(float $rate): Transaction {
        $this->amount += $this->amount * $rate / 100;// calculate the amount for the rate 8, so amount + rate (100 + 8)
        return $this;
    }
    public function getAmount(): float { return $this ->amount; }
}

$amount = (new Transaction(5, "hello"))
    ->addTax(10)
    ->getAmount();

var_dump($amount);
var_dump($amount);
var_dump($amount);
var_dump($amount);