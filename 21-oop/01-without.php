<?php

header('Content-Type: text/plain');

require __DIR__."/01-without-cloud.php";

$account1 = [
    'nr' => 2385621011043,
    'holder' => 'Olivia Mason',
    'balance' => 1250.00
];

$account2 = [
    'nr' => 9644621011043,
    'holder' => 'Rakib Mondal',
    'balance' => 450.00
];

function bank_module_print_balance(array $account1)
{
    echo "The balance of account #{$account1['nr']} is {$account1['balance']}\n";
}

function bank_module_transfer(array &$from, array &$to, float|int $amount): bool
{
    if ($from['balance'] >= $amount) {
        $from['balance'] -= $amount;
        $to['balance'] += $amount;

        return true;
    } else {
        return false;
    }
}

bank_module_print_balance($account1);
bank_module_print_balance($account2);

bank_module_transfer($account2, $account1, 300);
bank_module_print_balance($account1);
bank_module_print_balance($account2);
