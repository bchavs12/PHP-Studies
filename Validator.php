<?php

class Validator
{

  public static function string($value, $min = 5, $max = INF)
  {
    $trimedValue = trim($value);

    if (strlen($trimedValue) < $min) {
      return "The body must be more than {$min} characters.";
    } elseif (strlen($trimedValue) >= $max) {
      return "The body can not be more than {$max} characters.";
    }

    return strlen($trimedValue) >= $min && strlen($trimedValue) <= $max;
  }

  public static function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}
