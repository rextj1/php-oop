<?php
declare(strict_types=1);
namespace App;


// callable

class Callback
{
  // access modifiers or vsibiity
  public int $run = 1;
  public string $sum = 'love';
  public function callExample()
  {
    return $this;
  }
}
