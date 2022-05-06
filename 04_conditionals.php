<?php
/*
    OPERATORS

    <
    >
    <=
    >=
    ==
    ===
    !=
    !==
  */

$age = 17;

echo $age;

if ($age >= 16) {
  echo 'You are old enough to vote';
} else {
  echo 'You are not old enough to vote';
};

echo "</br>";

$t = date("H");

echo $t;

if ($t < 12) {
  echo 'Good Morning';
} elseif ($t < 17) {
  echo 'Good Afternoon';
} else {
  echo 'Good Evening';
}

echo "</br>";

$posts = ['First Post'];

if (!empty($posts)) {
  echo $posts[0];
} else {
  echo 'No Posts';
}
echo "</br>";

// Ternary operator
echo !empty($posts) ? $posts[0] : 'No Posts';

echo "</br>";
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
$firstPost = $posts[0] ?? null;
echo $firstPost;
echo "</br>";

// Switches

$favColor = 'blue';

switch ($favColor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green or blue';
}
