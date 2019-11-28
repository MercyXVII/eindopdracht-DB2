<?php
//php for adding new person

  if (isset($_POST['submit']))
  {
    require_once("config.php");

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];

    $query = "INSERT INTO verjaardagen (voornaam, achternaam, geboortedatum) VALUES ('$voornaam', '$achternaam', '$geboortedatum')";
    mysqli_query($conn, $query);

    if(!$query)
    {
      echo "Not inserted.";
    } else {
      echo "Inserted";
      header("Location: index.php");
    }
  }




 ?>
