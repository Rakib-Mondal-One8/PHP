<?php

class BankAccount{
    private $balance;

    public function setBalance($amount){
        if($amount>=0){
            $this->balance = $amount;
        }
        else{
            echo "Invalid Amount!!";
        }
    }

    public function getBalance(){
        return $this->balance;
    }
}


$account = new BankAccount();
$account->setBalance(100);
echo $account->getBalance();