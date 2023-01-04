<?php
namespace src\app\Demo\Closure;

class Closure {

  /**
   * Summary of multiplierFactory
   * @param mixed $multiplier
   * @return Closure
   */
  function multiply(int $multiplier): mixed
  {
    return function(int $number) use($multiplier): int
    {
      return $number * $multiplier;
    };
  }

}