<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $gender=$_REQUEST['gender'];
    $contact_no=$_REQUEST['contact_no'];
    $province=$_REQUEST['province'];
    $birthday=$_REQUEST['birthday'];
    $password=$_REQUEST['pswd'];
    $regOn=date('Y-m-d H:i:s');

    $getData=mysqli_query($db,"SELECT * FROM `ts_user` WHERE `email`='$email'");
    $rowCount=mysqli_num_rows($getData);
    if($rowCount!=0)
    {
        $_SESSION['errorMsg']="Email already registered";
    }
    else
    {
        $query=mysqli_query($db,"INSERT into `ts_user` (`name`,`gender`,`province`,`birthday`,`email`,`contact`,`password`,`registered_on`) VALUES ('$name','$gender','$province','$birthday','$email','$contact_no','$password','$regOn')");

        $_SESSION['successMsg']="Registered Successfully";
    }
}
else
{
    $_SESSION['errorMsg']="Please submit the form";
}
header('location:register.php')
?>