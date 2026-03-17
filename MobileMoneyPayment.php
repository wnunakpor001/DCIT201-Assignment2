<?php

class MobileMoneyPayment extends Payment{

    public function processPayment($amount){
        return "Mobile Money Payment Processing of: $" . $amount;
    }
}