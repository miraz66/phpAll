<?php

declare(strict_types=1);
class Transactions {
    public ?float $amount;
    public $description;

    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }
}