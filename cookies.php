<?php

if(isset($_COOKIE['myCookie']) && !$_POST['username']) {
header('Location:index.php');
}
// $_SESSION['username'] = $username;''


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Cookies Result</title>
</head>
<body>




<?php

if(isset($_COOKIE["username"])) {
  echo "<h3>welcome back, $_COOKIE[myCookie]!</h3><br>";
  setcookie('myCookie', 'Daria', time() + 60*60*24*7, '/');
  session_start();
  $_SESSION['firstname']=$_COOKIE['myCookie'];
} 
else {
  if(isset($_POST["username"])) {
    setcookie('myCookie', $_POST["username"], time() + 60*60*24*7, '/');
    echo "<h3> Hallo $_POST[username]!</h3>";
    session_start();
    $_SESSION['firstname']=$_POST['username'];
  } 
}

echo '<a href = "index.php?logout=true">Logout</a>';










?>





  
</body>
</html>