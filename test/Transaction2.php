<?php

declare(strict_types= 1);

// namespace App\PaymentGateway\Paddle;

class Transaction2 {
    public float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function process() {
            echo "Processing" . $this->amount . "transaction";
    }
}