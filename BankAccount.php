<?php

class BankAccount{
    // Private attributes (Encapsulation)
    private $accountNumber;
    private $accountHolderName;
    private $balance;

    // Constructor
    public function __construct($accountNumber, $accountHolderName, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolderName = $accountHolderName;
        $this->balance = $balance;
    }

    // Deposite method

    public function deposit($amount){
        if($amount <= 0){
            echo "Error: Deposit amount cannot be less than 0. \n";
        }else {
            $this->balance += $amount;
            echo "Deposit successful: New balance is: $" . $this->balance . "\n";
        }
    }

    // Withdraw method
    public function withdraw($amount){
        if($amount <= 0){
            echo "Error: Withdraw amount cannot be less than 0. \n";
        }elseif ($amount > $this->balance){
            echo "Error: Insufficient funds. \n";
        } else {
            $this->balance -= $amount;
            echo "Withdraw successful: New balance is: $" . $this->balance . "\n";
        }
    }

    // Getter for balance
    public function getBalance(){
        return $this->balance;
    }

    // Getter for account number
    public function getAccountNumber(){
        return $this->accountNumber;
    }

}

?>