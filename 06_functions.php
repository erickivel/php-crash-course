<?php
//Functions
$y = 12;

function registerUser($name)
{
  //global variable scope
  global $y;
  echo $y;
  echo "</br>";
  echo "User $name registered";
};

registerUser('Eric');

function sum($n1 = 4, $n2 = 7)
{
  return $n1 + $n2;
}

echo "</br>";
echo sum(33, 9);

echo "</br>";
echo sum();
echo "</br>";


// Anonymous function
$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(10, 1);
echo "</br>";

// Arrow function 
$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(7, 6);
