<?php

$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php

      if(isset($_COOKIE["SomeName"])) {

        $someOne = $_COOKIE["SomeName"];
        echo $someOne;

      } else {

          $someOne = "";

      }

     ?>

  </body>
</html>
