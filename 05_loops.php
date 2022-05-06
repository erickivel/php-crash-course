  <?php
  /*
      For Loop
    */

  for ($x = 0; $x <= 10; $x++) {
    echo $x;
    echo "</br>";
  }

  //While loop
  $y = 1;

  while ($y <= 15) {
    echo 'Number' . $y . '<br>';
    $y++;
  }
  echo "</br>";

  $z = 1;
  do {
    echo 'Number ' . $z . '<br>';
    $z++;
  } while ($z <= 5);


  echo "</br>";

  //Foreach Loop

  $dbPosts = ['First Post', 'Second Post', 'Third Post'];

  foreach ($dbPosts as $index => $post) {
    echo $index . '-' . $post . '<br>';
  }

  $person = [
    'first_name' => 'Eric',
    'last_name' => 'Kivel',
    'email' => "eric@email.com",
  ];

  foreach ($person as $key => $value) {
    echo "$key - $value <br>";
  }
