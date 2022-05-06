<?php
/*
Comments
*/
//Allways use semicolon
echo 123, 'Helloo';
echo "</br>";
//print is for single argument
print "hello";
echo "</br>";
//Print single and multiple arguments
print_r([1, 2, 3]);
echo "</br>";

//var_dump() - Return more information like data type and length
var_dump([1, 2, 6]);
echo "</br>";
var_dump("Eric");
echo "</br>";
//var_export() - Return string representation
var_export('Hello');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?php echo 'Post one'; ?></h1>
  <h1><?= 'Post one'; ?></h1>
</body>

</html>