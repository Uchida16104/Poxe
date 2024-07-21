require 'opal'
require 'native'
ary=Array.new
srand(100)
for i in 0..rand(100) do
  ary.push(rand(100))
  puts ary
  for j in 0..ary.length do 
    puts "Hello, Ruby."
  end
  end
