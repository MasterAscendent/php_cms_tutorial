<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php

    $x = "outside"; // Global

    function convert() {
    global $x;
      $x = "inside"; // Local

    }

    echo $x;

    echo "<br />";

    convert();

    echo $x;
     ?>

  </body>
</html>
