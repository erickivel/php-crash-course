<?php
$fruits = ['apple', 'banana', 'pear'];

// Get length
echo count($fruits);
echo "</br>";

// Search array
var_dump(in_array('apple', $fruits));
echo "</br>";

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry');
//Add to the beginning of the array
array_unshift($fruits, 'mango');
print_r($fruits);

echo "</br>";

// Remove from array
array_pop($fruits);
// Remove from the begining
array_shift($fruits);
// Remove determined index
//unset($fruits[2]);

// Split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);

echo "</br>";

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// Merge two arrays
$arr3 = array_merge($arr1, $arr2);
// or
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);
echo "</br>";


$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

// Uses one array as index and another as value
$c = array_combine($a, $b);
print_r($c);
echo "</br>";

// flip array (keys to values and values to keys)
$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1, 20);
print_r($numbers);

// Map an array
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);

// print_r($newNumbers);

// Filter an array
$lessThan10 = array_filter($numbers, fn ($number) =>
$number <= 10);

print_r($lessThan10);

// Reduce method
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);

var_dump($sum);
