<?php

header('Content-Type: text/plain');

class BankAccount
{
    public string $nr;
    public string $holder;
    public float $balance;
}

$account1 = new BankAccount();
$account1->nr = '2385621011043';
$account1->holder = 'Rakib Mondal';
$account1->balance = 1250.00;

function print_balance(BankAccount $account)
{
    echo "The balance of account #{$account->nr} is {$account->balance}\n";
}
var_dump($account1);

print_balance($account1);
