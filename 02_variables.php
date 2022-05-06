<?php
/*
------- PHP Data Types --------
- String
- Integer
- FLoat
- Boolean
- Array
- Object -> A Class
- NULL
- Resource (special variable)
*/

$name = 'Eric';
$age = 17;
$has_kids = true;
$cash = 19.01;

echo $name;
echo "</br>";
echo $age;
echo "</br>";
echo $has_kids;
//return 1 if true and nothing if false
echo "</br>";
echo $cash;
echo "</br>";
echo $name . ' is ' . $age . ' years old.';
echo "</br>";
//Templates literals
echo "${name} is ${age} years old";

echo "</br>";
$x = '5' + '5';
var_dump($x);
echo "</br>";
// echo 10 - 5;

//constants - convention all upper case
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST . '/' . DB_NAME;
