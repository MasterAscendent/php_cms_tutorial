<?php

if(isset($_POST['submit'])){

    echo "Yes, it worked. ";

    $name = array("Steven", "Student", "Paul", "John", "Bob", "Jesus");
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){

      echo "Username must be longer than five.";

    } elseif (strlen($username) > $maximum ) {

      echo "Username must be ten or less.";

    }

    if (!in_array($username,$name)) {
      echo "Sorry you are not allowed";
    } else {
      echo "Welcome";
    }

    echo "Hello " . $username;
    echo " your password is: " . $password;
};


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <form action="form.php" method="post">
      <input type="text" name="username" placeholder="Enter Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="submit">
    </form>

  </body>
</html>
