<?php include "db.php";

  if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $password = $_POST['password']

      $query = "INSERT INTO users(username,password) ";
      $query .= "VALUES ('$username', '$password')";

      $result = mysqli_query($connection, $query);

      if(!$result){
        die('Query FAILED' . mysqli_error($connection));
      }



      // if($username && $password){
      //
      //   echo $username;
      //   echo $password;
      //
      // }else{
      //   echo "This field may not be blank.";
      // }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <div class="col-sm-6">
        <form action="login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <lable for="password">Password</lable>
            <input type="password" name="password" class="form-control" />
          </div>

          <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
      </div>
    </div>
  </body>
</html>
