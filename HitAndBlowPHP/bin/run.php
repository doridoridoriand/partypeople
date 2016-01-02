<?php

require_once('../lib/base.php');

// インスタンス生成
$base_inst = new Base();
// 乱数生成
$random_digits = $base_inst->random_number();
$counter = 0;

print GAME_START . NUMBER_OF_DIGITS . DISPLAY_STRING . "\n";

while(true) {
  $counter++;
  $hash = [];
  $input = trim(fgets(STDIN));
  $hash['input'] = $input;
  $hash['digits_origin'] = $random_digits;
  // バリデーションがすべて通った時の処理をこの中に
  if ($base_inst->validator($input)) {
    $result = $base_inst->check_num($hash);
    print$result[0] . "\n";
    if ($result[1] == NUMBER_OF_DIGITS) {
      print 'おめでとうございます！！！' . $counter . "回目でクリアしました。\n";
      break;
    }
  } else {
    print INPUT_HAS_WRONG_DATA . "\n";
  }
  print SPRIT_LINE . "\n";
}
