<?php
  require_once('includes/config.php');
  include('age.php');
  $sql = "SELECT * FROM verjaardagen";
  $result = $conn->query($sql);


$row11 = array('dob'=>'');


  if ($result->num_rows > 0)
  {
    echo "<table>
      <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Geboortedatum</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>";
    // outputs van elke row
    while ($row = $result->fetch_assoc())
    {
      echo "<tr>";
      echo '<td>'. $row['voornaam'] .'</td>';
      echo '<td>'. $row['achternaam'] .'</td>';
      echo '<td>'. $row['geboortedatum'] .'</td>';
      echo '<td>'. dateDifference($date_1, $date_2) . '</td>';
      echo '<td> <a href="update.php?id='.$row['id'].'">Edit</a></td>';
      echo '<td> <a href="delete.php?id='.$row['id'].'">Delete</a></td>';
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>
