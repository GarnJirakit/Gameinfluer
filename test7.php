<?php

$conn = mysqli_connect("localhost", "root", "", "gameinfluer");

$query = "SELECT sum(facebookCount + youtubeCount) FROM `ts_user`";
$qresult = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($qresult);
$count = $row["sum(facebookCount + youtubeCount)"];
echo $count;   
?>


