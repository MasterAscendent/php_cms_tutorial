<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php

      function init(){

        say_Something();
        echo "<br />";
        calculate();

      }

      function calculate(){

        echo 456 +345;

      }

      function say_Something(){

        echo "Hello Student, do you like the class? yes? Okay.. Great!";

      }

      init();

     ?>

  </body>
</html>
