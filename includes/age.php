<?php
$date = $_POST['geboortedatum'];
$date_1 = $date;
$today = new DateTime();
$date_2 = $today->format("Y-m-d");


function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);

    return $interval->format($differenceFormat);

}

 ?>
