module CheckInputNum
  def check_hit
    counter = 0
    for i in 0..$number_of_digits - 1 do
      self[:input].chars[i]
      if self[:input].chars[i] == self[:answer].to_s.chars[i]
        counter += 1
      end
    end
    counter
  end

  def check_blow
    counter = 0
    self[:input].chars.each do |num|
      if self[:answer].to_s.chars.include?(num)
        counter += 1
      end
    end
    counter - self.check_hit
  end

  def check_num
    result = {}
    result[:hits]  = self.check_hit
    result[:blows] = self.check_blow
    result
  end
end
