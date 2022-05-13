<?php
    include('config.php');

    if(!isset($_SESSION['loggedinId']))
    {
        session_start();
        header('location:login2.php');
    }

    $userId=$_SESSION['loggedinId'];
    $getData=mysqli_query($db,"SELECT * FROM `ts_brand` WHERE `id`='$userId'");
    $row=mysqli_fetch_assoc($getData);

    // Connection to database
  $connection=mysqli_connect("localhost","root","","gameinfluer");
  // Check connection
    if (mysqli_connect_errno())
      {
      echo 'NOT_OK';
      //echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
  
  // Increasing the current value with 1
    mysqli_query($connection,"UPDATE ts_brand SET ticket = (ticket + 1)
        WHERE id='$userId'");
  
    mysqli_close($connection);
  
    echo 'OK'; 

?>