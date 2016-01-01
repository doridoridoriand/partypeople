module Validator

  def is_correct
    if self.is_digits && self.has_not_duplicate && self.is_length_correct
      true
    end
  end

  # 数字が引っかかったらtrue
  def is_digits
    if self =~ /^[0-9]+$/
      true
    else
      raise 'InputNotIntegerError'
    end
  end

  # 重複があったらtrue
  def has_not_duplicate
    if self.length == self.chars.uniq.length
      true
    else
      raise 'InputNumDupliateError'
    end
  end

  # 指定された桁数からずれていたらtrue
  def is_length_correct
    if self.length - 1 == $number_of_digits
      true
    else
      raise 'LengthWrongError'
    end
  end

  # キャッチしたエラー内容で文章変える
  def msg
    arr = []
    case self.to_s
    when 'InputNotIntegerError'
      arr << INPUT_NOT_INTEGER
    when 'InputNumDupliateError'
      arr << INPUT_NUM_DUPLICATE
    when 'LengthWrongError'
      arr << INPUT_LENGTH_NOT_CORRECT
    end
    arr.join(' ').to_s
  end
end
