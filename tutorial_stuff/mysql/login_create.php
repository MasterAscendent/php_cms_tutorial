<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php createRows(); ?>

<?php include "includes/header.php"; ?>

    <div class="container">
      <h1 class="text-center">Create</h1>
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

          <input class="btn btn-primary" type="submit" name="submit" value="CREATE">

        </form>
      </div>

<?php include "includes/footer.php" ?>
