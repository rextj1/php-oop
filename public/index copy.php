<?php
declare(strict_types=1);
use App\AllArrays;
use App\Callback;
use App\ExistFunctions;
use App\Transaction;

require __DIR__ . '/../vendor/autoload.php';

class Look extends AllArrays
{

    public function __construct(public Transaction $transaction, public Callback $callback)
    {
    }

    // function run(): int
    // {
    //     $this->tax = $this->transaction->money;
    //     return $this->tax;
    // }
}


$look = new Look(new Transaction, new Callback);
print_r($look->callback->callExample()->run);
// print_r($look->transaction->tax());
// var_dump($look->counts('count', 'checkNow'));
// var_dump(ThisStatics::instance());

// var_dump($look->searchArrColumn());

// var_dump($look->arrayMap());



//  '<br>'.print_r($look->x);
