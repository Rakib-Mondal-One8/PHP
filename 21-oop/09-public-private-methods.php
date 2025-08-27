<?php

header('Content-Type: text/plain');

class BankAccount
{
    public function __construct(
        private string $nr,
        private string $holder,
        private float $balance
    ) {}

    public function getBalance(): float
    {
        return $this->balance;
    }

    
    private function setBalance(float $balance)
    {
        $this->balance = $balance;
    }
    
    private function updateFromDB(){
        //TODO : To be implimented!
    }

    public function printBalance()
    {
        $this->updateFromDB();
        echo "The balance of account #{$this->nr} is {$this->balance}\n";
    }

    public function transfer(BankAccount $to, int $amount)
    {
        $this->updateFromDB();
        $to->updateFromDB();
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            $to->balance += $amount;

            return true;
        } else return false;
    }
}


$account1 = new BankAccount('2385621011043', 'Rakib Mondal', 1250.00);
$account1->printBalance();

// $account1->setBalance(1255.00);

$account2 = new BankAccount('3484272304134', 'Rajesh khanna', 2250.00);
$account2->printBalance();

// $account1->transfer($account2, 150);
// $account1->printBalance();
// $account2->printBalance();
