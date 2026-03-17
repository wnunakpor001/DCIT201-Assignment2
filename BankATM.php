<?php

class BankATM implements ATMOperations {
    private $balance;

    // Constructor

    public function __construct($balance = 0) {
        $this->balance = $balance;
    }

    // Deposit method

    public function deposit($amount) {
        if ($amount < 0) {
            echo "Error: Amount must be greater than 0. \n";
        }else {
            $this->balance += $amount;
            echo "Deposit successful: New amount is $" . $this->balance . "\n";
        }
    }

    // Withdrawal method
    public function withdraw($amount)
    {
        if ($amount < 0) {
            echo "Error: Amount must be greater than 0. \n";
        } elseif ($this->balance < $amount) {
            echo "Error: Insufficient funds. \n";
        } else {
            $this->balance -= $amount;
            echo "Withdrawal successful: New amount is $" . $this->balance . "\n";
        }
    }

        // Method for checking balance

        public function checkBalance() {
            echo "Final Balance: $" . $this->balance . "\n";
        }
    }


