<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php

      function greeting($message){

        echo $message;
        echo "<br />";

      }

      greeting("Hello, world!");

      function addNumbers($number1, $number2){

        $sum = $number1 + $number2;

        echo $sum;

      }

      addNumbers(48,48);

     ?>

  </body>
</html>
