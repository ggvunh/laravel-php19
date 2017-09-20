<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Math extends Model
{
    public static function sumNumber($a, $b)
    {
      if (!is_numeric($a)) {
        return "a is not number";
      }

      if (!is_numeric($b)) {
        return'b is not number';
      }

      return $a + $b;
    }
}
