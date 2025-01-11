class GenDigit
  def self.new_digits
    (0..9).to_a.sample($number_of_digits).join.to_i
  end
end
