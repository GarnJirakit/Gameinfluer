<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
    $ticket=$_REQUEST['ticket'];

    $getData=mysqli_query($db,"SELECT * FROM `ts_brand` WHERE `ticket`='$ticket'");
    $rowCount=mysqli_num_rows($getData);
    if($rowCount!=0)
    {
        $_SESSION['errorMsg']="Email already registered";
    }
    else
    {
        $query=mysqli_query($db,"UPDATE `ts_brand` SET ticket = $ticket + 1 WHERE id = '3'");    

        $_SESSION['successMsg']="Registered Successfully";
    }
}
else
{
    $_SESSION['errorMsg']="Please submit the form";
}
header('location:test5.php')
?>