<?php

namespace App;

class Transaction {
    public $money = 4;
    public string $pay = 'room';

    public function tax(): int {
        return $this->money;
    }

    public function check(Transaction $transaction): string{
        return $transaction->pay;
    }
}