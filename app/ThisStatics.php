<?php

namespace App;

class ThisStatics
{
    public int $a= 4;
    public static string $gender = 'Boy';

    public static function boy(): static
    {
        // `new self initializes an object within the class which can be used to access any object or method`
        return new self;
    }

    public static function instance(): int
    {
        $x = self::boy();
        var_dump($x->root());
        return $x->a;    
    }

    public function root(): array{
        return [1,2,3,4];
    }
}
