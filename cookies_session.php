<?php

//Cookies setzen
/* setcookie('myCookie', 'Daria', time() + 60*60*24*7, '/');   */

//myCookie - ist die name des Cookies;man kann was er will sreiben; time - skunden, minuten, stunden, tagen


/* if(isset($_COOKIE['myCookie'])) {
print_r($_COOKIE['myCookie']);
} else {
  print_r('Du hast kein Cookie gesetzt!');
  setcookie('myCookie', 'Daria', time() + 60*60*24*7, '/');  
} */

/////////////////////////////////

//Cookie löschen
if(isset($_COOKIE['myCookie'])) {
  print_r($_COOKIE['myCookie']);
  print_r($_COOKIE['id']);
  setcookie('myCookie', $_COOKIE['myCookie'], time() -1000, '/');
} else {
  print_r('Du hast kein Cookie gesetzt!');
  setcookie('myCookie', 'Daria', time() + 60*60*24*7, '/');
  setcookie('id', 3, time() + 60*60*24*7, '/');
}

print_r('<br>'.time());

//Session start
session_start();
$_SESSION['id'] = 1;

//Session beenden
session_unset();
session_destroy();

?>