<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to 
  be used across multiple pages.
  Unlike cookies, sessions are stored on the server, more secure

  You can like store users ids
*/
//Start session
session_start();
if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username',  FILTER_SANITIZE_SPECIAL_CHARS);

  $password = $_POST['password'];

  if ($username === 'Eric' && $password === 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit" />
</form>