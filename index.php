<?php

if(isset($_GET['logout'])) {
  setcookie('myCookie', 'Daria', time() -1000, '/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>

<form action="cookies.php" method="POST">
<h2>Cookie</h2>
<br>
<h5>Enter your Firstname</h5>
<br>
<input type="textarea" name = "username">
<br>
<br>
<button>GO</button>
</form>




  
</body>
</html>