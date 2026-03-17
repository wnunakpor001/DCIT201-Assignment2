<?php

class BankTransferPayment extends Payment{

    public function processPayment($amount){
        return "Bank Transfer Payment Processing of: $" . $amount;
    }
}