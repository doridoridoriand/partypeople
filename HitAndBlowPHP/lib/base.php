<?php

require_once('constants.php');
require_once('validator.php');
require_once('check.php');

class Base {
  use Check, Validator;

  public function random_number() {
    $digits = [];
    for ($i = 0; $i < 10; $i++) {
      array_push($digits, rand(0, 9));
    }
    $digits_uniq = array_unique($digits);
    return join(array_slice($digits_uniq, 0, NUMBER_OF_DIGITS));
  }
}
