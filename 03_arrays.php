<?php
// Simple Array
$numbers = [1, 44, 18, 156];
$fruits = array('pear', 'pineapple');

print_r($fruits);
echo "</br>";
var_dump($numbers);
echo "</br>";
echo $fruits[1];
echo "</br>";

//  Associative Array
$colors = [
  'first' => 'John',
  4 => 'Eric'
];

print_r($colors[4]);

echo "</br>";

$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['blue'];

echo "</br>";

$person = [
  'first_name' => 'Eric',
  'last_name' => 'Kivel',
  'email' => "eric@email.com",
];

echo $person['email'];
echo "</br>";

// Multi-dimensional Array

$people = [
  [
    'first_name' => 'Eric',
    'last_name' => 'Kivel',
    'email' => "eric@email.com",
  ],
  [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => "Brad@email.com",
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => "john@email.com",
  ]
];

print_r($people);
echo "</br>";
echo $people[1]['email'];
echo "</br>";

var_dump(json_encode($people));
