<?php
    session_start();
    $serverName="localhost";
    $userName="root";
    $dbPassword="";
    $dbName="gameinfluer";

    $db=mysqli_connect($serverName,$userName,$dbPassword,$dbName);

    if(!$db)
    {
        die("Connection Failed".mysqli_connect_error());
    }
?>