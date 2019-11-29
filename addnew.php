<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert data</title>
    <link rel="stylesheet" href="./CSS/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <!-- HTML FORM FOR ADDING NEW PERSON -->
  <body>
    <h1>Add a person</h1>
    <?php require_once("includes/insert.php") ?>
      <div class="text-center">
     <form method="post">
      <label for="voornaam">Voornaam:</label>
      <input type="text" name="voornaam" autocomplete="off">
      <label for="achternaam">Achternaam:</label>
      <input type="text" name="achternaam" autocomplete="off">
      <label for="geboortedatum">Geboortedatum:</label>
      <input type="date" name="geboortedatum" autocomplete="off"> <br>
      <input type="submit" name="submit" value="Add person"> <br>
        <a id="button" href="index.php" style="color:green;">Ga terug naar het overzicht</a>
      </div>
    </form>
  </body>
</html>
