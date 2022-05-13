<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
    $id=$_REQUEST['id'];
    $ticket1=$_REQUEST['ticket1'];
    $num=$_REQUEST['num'];
    $name=$_REQUEST['name'];
    $month=$_REQUEST['month'];
    $year=$_REQUEST['year'];
    $cvc=$_REQUEST['cvc'];
    $regOn=date('Y-m-d H:i:s');

    $getData=mysqli_query($db,"SELECT * FROM `ticket_new` WHERE `id`='$id'");
    $rowCount=mysqli_num_rows($getData);
    if($rowCount!=0)
    {
        $_SESSION['errorMsg']="Email already registered";
    }
    else
    {
        $query=mysqli_query($db,"INSERT into `ticket_new` (`ticket1`,`num`,`name`,`month`,`year`,`cvc`,`time`) VALUES ('$ticket1','$num','$name','$month','$year','$cvc','$regOn')");

        $_SESSION['successMsg']="Registered Successfully";
    }

    $ticket=$_REQUEST['NumTicket'];
    $ticket1=$_REQUEST['ticket1'];
    
        $userId=$_SESSION['loggedinId'];
        $up=mysqli_query($db,"UPDATE ts_brand SET NumTicket = NumTicket + $ticket1 WHERE id = '".$userId."'
    ");

        $_SESSION['successMsg']="อัปเดตจำนวนตั๋วเรียบร้อย";
}
else
{
    $_SESSION['errorMsg']="Please submit the form";
}
header('location:ticket1.php')


?>