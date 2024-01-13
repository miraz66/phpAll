<?php

declare(strict_types=1);
/* class Transactions {
    private ?float $amount;
    private $description;

    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate) {
        $this->amount += $this->amount * $rate / 100;// calculate the amount for the rate 8, so amount + rate (100 + 8)
    }

    public function applyDiscount($rate) {
        $this->amount -= $this->amount * $rate / 100;
    }

    public function getAmount(): float { return $this ->amount; }
} */

class Transactions {
    private ?float $amount;
    private $description;

    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transactions {
        $this->amount += $this->amount * $rate / 100;// calculate the amount for the rate 8, so amount + rate (100 + 8)
        return $this;
    }

    public function applyDiscount($rate): Transactions {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount(): float { return $this ->amount; }

    public function __destruct() { 
        echo "Destruct" . $this->description . "\n";
    }
}