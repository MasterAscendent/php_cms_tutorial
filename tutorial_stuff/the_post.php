<?php

  echo $_POST['name'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <form action="the_post.php" method="post">
      <input type="text" name="name">

      <input type="submit">
    </form>

  </body>
</html>
