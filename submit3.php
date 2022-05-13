<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $contact_no=$_REQUEST['contact_no'];
    $password=$_REQUEST['pswd'];
    $regOn=date('Y-m-d H:i:s');

    $getData=mysqli_query($db,"SELECT * FROM `admin` WHERE `email`='$email'");
    $rowCount=mysqli_num_rows($getData);
    if($rowCount!=0)
    {
        $_SESSION['errorMsg']="Email already registered";
    }
    else
    {
        $query=mysqli_query($db,"INSERT into `admin` (`name`,`email`,`contact`,`password`,`registered_on`) VALUES ('$name','$email','$contact_no','$password','$regOn')");

        $_SESSION['successMsg']="Registered Successfully";
    }
}
else
{
    $_SESSION['errorMsg']="Please submit the form";
}
header('location:admin_register.php')
?>