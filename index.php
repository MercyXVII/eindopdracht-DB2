<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Familie en vrienden</title>
    <link rel="stylesheet" href="./CSS/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php require_once("includes/config.php") ?>

  </head>
  <body>
    <!-- index for table -->
    <?php
      require("includes/table.php");
      //include("includes/age.php");
    ?>
    <br>
    <div class="text-center">
      <a href="addnew.php" id="button">Add a person</a>
    </div>

  </body>
</html>
