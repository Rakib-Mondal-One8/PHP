<?php

header('Content-Type: text/plain');

class BankAccount
{
    function __construct(
        public string $nr,
        public string $holder,
        public float $balance
    ) {
        
    }

    function printBalance()
    {
        echo "The balance of account #{$this->nr} is {$this->balance}\n";
    }

    function transfer(BankAccount $to ,int $amount){
        if($this->balance >= $amount){
            $this->balance -= $amount;
            $to->balance += $amount;

            return true;
        }
        else return false;
        
    }
}

$account1 = new BankAccount('2385621011043', 'Rakib Mondal', 1250.00);
$account1->printBalance();


$account2 = new BankAccount('3484272304134', 'Rajesh khanna', 2250.00);
$account2->printBalance();

$account1->transfer($account2,150);
$account2->transfer($account1,400);

$account1->printBalance();
$account2->printBalance();