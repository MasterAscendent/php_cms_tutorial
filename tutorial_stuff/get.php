<<?php

print_r($_GET);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <<?php

    $id = 10;
    $button = "CLICK HERE";

     ?>

     <a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>
  </body>
</html>
