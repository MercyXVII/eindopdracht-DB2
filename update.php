<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert</title>
    <link rel="stylesheet" href="./CSS/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
   <body>
 <!-- code for updating entry -->
    <?php
      error_reporting(0);
      require_once("includes/config.php");

      $id = $_GET['id'];

      $sql = "SELECT * FROM verjaardagen WHERE id = '$id'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      echo "<h1>Geselecteerd persoon is: ".$row['persoon']."</h1>";
    ?>

  <div class="text-center">
    <form method="post">
      <label for="voornaam">Voornaam:</label>
      <input type="text" name="voornaam" autocomplete="off">
      <label for="achternaam">Achternaam:</label>
      <input type="number" name="achternaam" autocomplete="off">
      <label for="geboortedatum">Geboortedatum:</label>
      <input type="text" name="geboortedatum" autocomplete="off"> <br>
      <input type="submit" name="submit"> <br>
    </form>
      <a id="button" href="index.php" style="color:green;">Ga terug naar het overzicht</a><br><br>
      <a id="button" href="addnew.php" style="color:green;">Insert New Person</a>
    </div>

    <?php
      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      $geboortedatum = $_POST['geboortedatum'];
      $query = "UPDATE verjaardagen SET voornaam='$voornaam', achternaam='$achternaam', geboortedatum='$geboortedatum' WHERE id='$id'";

      if(isset($_POST['submit'])){

        $required = ['voornaam', 'achternaam', 'geboortedatum'];
        if(!empty($required)){
          $result = $conn->query($query);
          header("Location: index.php");
        } else {
          echo "All fields are required.";
        }

      }

     ?>

  </body>
</html>
