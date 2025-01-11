<?php

trait Validator {

  /**
   * すべてのチェックに合格したらtrueが返ってくる
   * @param String
   * @return Boolean
   */
  public function validator($input) {
    if (self::digits_correct($input) &&
        self::duplicate_not_includes($input) &&
        self::length_correct($input)) {
      return true;
    }
  }

  public function msg($input) {
  }

  /**
   * @param Integer
   * @return Boolean
   */
  private function digits_correct($input) {
    if (ctype_digit((string) $input)) {
      return true;
    }
  }

  /**
   * @param Integer
   * @return Boolean
   */
  private function duplicate_not_includes($input) {
    $str = [];
    for ($i = 0; $i < strlen($input); $i++) {
      array_push($str, $input[$i]);
    }

    if (count($str) == count(array_unique($str))) return true;
  }

  /**
   * @param Integer
   * @return Boolean
   */
  private function length_correct($input) {
    if (strlen($input) == NUMBER_OF_DIGITS) return true;
  }
}
