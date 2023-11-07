<?php

namespace App;

class ExistFunctions
{
    public string $count = 'n';
    public array $arr = ['a'=>1,'b'=> 2];

    public function counts(string $property, $method): string
    {
        if(array_key_exists('a', $this->arr)){
            return 'key';
        }
        if (property_exists($this, $property)) {
            return $this->count = 'mana';
        }
        if (method_exists($this, $method)) {
            return $this->checkNow();
        }

        return 'oooops';
    }

    public function checkNow(): string
    {
        return 'yes';
    }
}
