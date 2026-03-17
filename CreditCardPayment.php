<?php

class CreditCardPayment extends Payment{

    public function processPayment($amount){
        return "Credit Card Payment Processing of: $" . $amount;
    }
}