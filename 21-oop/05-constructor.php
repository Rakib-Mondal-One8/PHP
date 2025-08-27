<?php

header('Content-Type: text/plain');

class BankAccount
{
    public string $nr;
    public string $holder;
    public float $balance;

    function __construct(string $nr,string $holder,float $balance)
    {
        $this->nr = $nr;
        $this->holder = $holder;
        $this->balance = $balance;
    }

    function printBalance()
    {
        echo "The balance of account #{$this->nr} is {$this->balance}\n";
    }
}

$account1 = new BankAccount('2385621011043', 'Rakib Mondal', 1250.00);
$account1->printBalance();
