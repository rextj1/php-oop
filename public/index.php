<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// for loop with break and continue 
$b = 1;
$run = function () use ($b) {
    for ($i = $b; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }
        if ($i % 2 == 0) {
            continue;
        }
        echo "$i<br>";
    }
};

function processItems($items, $callback) {
    foreach ($items as $item) {
        $result = $callback($item);
        echo "$result<br>";
    }
}

$names = ["Alice", "Bob", "Charlie"];

processItems($names, function($name) {
    return strtoupper($name);
});
// Output: ALICE BOB CHARLIE

function modifyValue(&$x) {
   
   return $x *= 2;
}

$num = 5;
echo modifyValue($num);
echo $num; 

// echo $run();

// class MyClass {
//     public function myMethod($value) {
//         echo $value;
//     }
// }

// $object = new MyClass();
// $callable = [$object, 'myMethod'];
// $callable("Hello, world!");  // Prints: Hello, world!