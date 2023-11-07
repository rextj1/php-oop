<?php

namespace App;

class AllArrays
{
    // array search gets the key of the array
    public array $arr = [1, 2, 3, 4];
    public array $assArr = ['a' => 1, 'b' => 2, 'c' => 3];

    public array $people = [
        [
            'name' => 'Umanah',
            'fav_color' => 'green'
        ],
        [
            'name' => 'John',
            'fav_color' => 'green'
        ],
        [
            'name' => 'Samuel',
            'fav_color' => 'blue'
        ]
    ];

    public function searhArr(): int
    {
        // this returns the coresponding key if successful
        $a = array_search(3, $this->arr);
        return $a;
    }
    public function searhassArr()
    {
        $a = array_search(2, $this->assArr);
        return $a;
    }

    public function arrColumn(): bool
    {

        $a = array_column($this->people, 'name', 'id');
        foreach ($a as $value) {
            echo $value;
        };
        return true;
    }
    public function searchArrColumn()
    {
        // this returns the first coresponding key if successful
        $a = array_search('Samuel', array_column($this->people, 'name'));
        if ($a == false) {
            echo $a;
            return 'oops';
        }
        return $this->people[$a]['fav_color'];
    }
    public function arrayMerge(): array
    {
        $a = array_merge($this->people);

        print_r($a);
        return [];;
    }

    public function arryFilter()
    {
        $a = array_filter($this->assArr, fn ($name) => $name === 2);
        return $a;
    }
    public function arrayMap()
    {
        // this is used to modify an array
        $a = array_map(fn ($name) => $name * 3, $this->assArr);
        return $a;
    }
    public function useMake()
    {
        return $this->make(new \App\ThisStatics);
    }
    public function make(ThisStatics $thisStatics)
    {
        return $thisStatics->a;
    }
}
