<?php

class Transaction{
    public function __construct(private float $amount, private string $description) {
        echo $description;
    }
}