<?php

trait Check {

  public function check_num($hs) {
    return [HIT . ': ' . self::check_hit($hs) . ', ' . BLOW . ': ' . self::check_blow($hs), self::check_hit($hs)];
  }

  private function check_hit($hs) {
    $hit = 0;
    for ($i = 0; $i < NUMBER_OF_DIGITS; $i++) {
      if ($hs['input'][$i] == $hs['digits_origin'][$i]) $hit++;
    }
    return $hit;
  }

  private function check_blow($hs) {
    $blow = 0;
    $arr = [];
    for ($j = 0; $j < NUMBER_OF_DIGITS; $j++) {
      array_push($arr, $hs['digits_origin'][$j]);
    }
    for ($i = 0; $i < strlen($hs['input']); $i++) {
      if (in_array($hs['input'][$i], $arr)) $blow++;
    }
    return $blow - self::check_hit($hs);
  }
}
