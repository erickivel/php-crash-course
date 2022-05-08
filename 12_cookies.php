<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the 
  remote browser and thus tracking or identifying 
  return users. You can set specific data to be stored
  in the browser, and then retrieve it when the user 
  visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store 
//sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set cookie
setcookie('name', 'Eric', time() + 86400 * 30); // 30 days

if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete cookie
setcookie('name', '', time() - 86400);
